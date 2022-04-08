<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property;
use App\Category;
use App\Gallery;


class PropertyController extends Controller
{
    public function index()
    {
      
        $categories=Category::get();
        return view('admin.property.index')->with(compact('categories'));
    }



    public  function  search(){
        $search=$_GET['query'];
        $propertys=property::where('title','LIKE','%'.$search.'%')->get();
        return view('admin.property.create')->with(compact('propertys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $Properties=Property::with('category')->get();
        return view('admin.property.create')->with(compact('Properties'));
    }

    public function create1(){
        return view('admin.gallery.create1');
    }

    public function show(){
        $galleries=Gallery::paginate(5);
        return view('admin.gallery.show')->with(compact('galleries'));
    }


    public function gallerystore(Request $request){
        $this->validate($request,[
            'image'=>'required',
        ]);

        $gallery=new Gallery;
            if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move('uploads/gallery/', $filename);
              $gallery->image=$filename;
            }

            $gallery->save();

            return back()->with('message','Image Added Successfully');

        // return back();
        
    }

    public function galleryDelete($id){
        $gallery=Gallery::find($id);
        $gallery->delete();
        return back()->with('message','Image Deleted Successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'property_title'=>'required',
            'property_description'=>'required',
            'thumbnail'=>'required|mimes:jpeg,png,jpg|max:2048',
            'purpose'=>'required',
            'location'=>'required',
            'state'=>'required',
            'city'=>'required',
            'land_area'=>'required',
            'contact_no'=>'required',
            'category_id'=>'required',
        ]);

        if($request->hasfile('thumbnail')) 
{ 
  $file = $request->file('thumbnail');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('uploads/images/', $filename);

}

$property=Property::create([
    'property_title'=>$request->property_title,
    'property_description'=>$request->property_description,
    'beds'=>($request->beds) ? $request->beds : 0,
    'baths'=>($request->baths) ? $request->baths : 0,
    'floor'=>($request->floor) ? $request->floor : 0,
    'location'=>$request->location,
    'state'=>$request->state,
    'city'=>$request->city,
    'purpose'=>$request->purpose,
    'category_id'=>$request->category_id,
    'contact_no'=>$request->contact_no,
    'land_area'=>$request->land_area,
    'thumbnail'=>$filename,
    ]);

    // dd($property);

    return back()->with('message','Property Added Successfully');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */



     public function property_edit($id){
         $properties=Property::find($id);
         $categories=Category::all();
         return view('admin.property.edit')->with(compact('properties','categories'));
     }



     public function property_update(Request $request,$id)
    {
        // dd($request->all());
        $this->validate($request,[
          'property_title'=>'required',
            'property_description'=>'required',
            'thumbnail'=>'required|mimes:jpeg,png,jpg|max:2048',
            'purpose'=>'required',
            'location'=>'required',
            'state'=>'required',
            'city'=>'required',
            'land_area'=>'required',
            'contact_no'=>'required',
            'category_id'=>'required',
        ]);

        if($request->hasfile('thumbnail')) 
{ 
  $file = $request->file('thumbnail');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('uploads/images/', $filename);

}
$property=Property::find($id);
$property->property_title=$request->property_title;
$property->property_description=$request->property_description;
$property->beds=($request->beds) ? $request->beds : 0;
$property->baths=($request->baths) ? $request->baths : 0;
$property->floor=($request->floor) ? $request->floor : 0;
$property->location=$request->location;
$property->state=$request->state;
$property->city=$request->city;
$property->purpose=$request->purpose;
$property->category_id=$request->category_id;
$property->contact_no=$request->contact_no;
$property->land_area=$request->land_area;
$property->thumbnail=$filename;
    

$property->save();
    return redirect('admin/property/create')->with('message','Property Update Successfully');

    
}


    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
 public function property_delete($id){
     $property=Property::find($id);
     $property->forceDelete();
     return back()->with('message','Property Delete Successfully');
 }


    // public function show(property $property)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        //
    }
}
