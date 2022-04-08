<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::paginate(3);
    return view('admin.category.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'property_type' => 'required',

        ]);

        Category::create([
        'property_type'=>$request->property_type,
        'description'=>$request->description
        ]);

        return back()->with('message','Property Type Added Succcessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category_edit($id)
    {
    $category=Category::find($id);
    return view('admin.category.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category_update(Request $request, $id)
    {
        $this->validate($request, [
            'property_type' => 'required',

        ]);

        $category=Category::find($id);
        $category->property_type=$request->property_type;
        $category->description=$request->description;
        $category->save();
   
        return redirect('admin/category/create')->with('message','Property Type Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category_trash($id){
        $category=Category::find($id);
        $category->delete();

        return back()->with('message','Property Type Trashed Successfully');
    }

    public function restore($id){
        Category::withTrashed()->findorfail($id)->restore();
        return back()->with('message','Restore Trashed Property Type Successfully');
    }
  
    public function trash(){
        $categories=Category::onlyTrashed()->get();
        return view('admin/category/trash')->with(compact('categories'));
    }

    public function category_delete($id)
    {
        Category::where('id', $id)->forceDelete();
        return back()->with('message','Property Type Deleted Successfully');
        }
}


                              <tbody>
                                        @foreach($doctors as $doctor)
                                        <tr>
                                            <td>{{$doctor->id}}</td>
                                            <td>{{$doctor->doctor_name}}</td>
                                            <td>{{$doctor->doctor_type}}</td>
                                            <td>{{$doctor->doctor_phone}}</td>
                                            <td>{{$doctor->created_at}}</td>
                                            <td><a href="#" class="btn btn-primary  editdrbutton custeditbut">Edit</a></td>
                                        </tr>
                                     @endforeach
                                    </tbody>
