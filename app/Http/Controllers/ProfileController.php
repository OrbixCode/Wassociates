<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use App\Role;
use App\Country;
use App\State;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login(){
         return view('auth.login');
     }
    public function index()
    {
        $users=User::with('role','profile')->paginate(3);
        return view('admin.profile.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        $countries=Country::get(['name','id']);
        return view('admin.profile.create')->with(compact('roles','countries'));
    }

    public function getState(Request $request)
    {
        $states = State::get()
        ->where("country_id",$request->country_id)
        ->pluck("name","id");
        return response()->json($states);
    }

    public function getCity(Request $request)
    {
        $cities = City::get()
        ->where("state_id",$request->state_id)
        ->pluck("name","id");
        return response()->json($cities);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasfile('thumbnail')) 
        { 
          $file = $request->file('thumbnail');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('uploads/profiles/', $filename);
        
        }

        $this->validate($request,[
         'name'=>'required',
         'email'=>'required|email|unique:users',
         'password'=>'required|same:confirm_password',
         'confirm_password'=>'required',
         'status'=>'required'
        ]);
        $user=User::create([
            'email'=>$request->email,
            'role_id'=>$request->role_id,
            'password'=>bcrypt($request->password),
            'status'=>$request->status,
        ]);
  
            $profile=Profile::create([
                'user_id'=>$user->id,
                'name'=>$request->name,
                'country_id'=>$request->country_id,
                'state_id'=>$request->state_id,
                'city_id'=>$request->city_id,
                'address'=>$request->address,
                'thumbnail'=>$filename,
                ]);
           

            if($user && $profile){
                MailController::SendMailRegister($user->email);
                return back()->with('message','New User Create Successfully');
            }else{
                return back()->with('message','Get Some Error');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        $product=User::find($id);
        $product->forceDelete();
        return back()->with('message','User Delete Successfully');
    }
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
