<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::get();
        return view('admin.subcategory.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories=Subcategory::with('getcategories')->get();
        // dd($subcategories);
    return view('admin.subcategory.create')->with(compact('subcategories'));
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
            'subcategory' => 'required',
            'category_id'=>'required',

        ]);

        Subcategory::create([
        'subcategory'=>$request->subcategory,
        'description'=>$request->description,
        'category_id'=>$request->category_id,
        ]);

        return back()->with('message','Sub-Category Added Succcessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function subcategory_edit($id)
    {
        $categories=Category::get();
    $subcategory=Subcategory::find($id);
    return view('admin.subcategory.edit')->with(compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function subcategory_update(Request $request, $id)
    {
        $this->validate($request, [
            'subcategory' => 'required',

        ]);

        $subcategory=Subcategory::find($id);
        $subcategory->subcategory=$request->subcategory;
        $subcategory->description=$request->description;
        $subcategory->category_id=$request->category_id;
        $subcategory->save();
   
        return redirect('admin/subcategory/List')->with('message','Sub-Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function subcategory_trash($id){
        $subcategory=Subcategory::find($id);
        $subcategory->delete();

        return back()->with('message','Sub-Category Trashed Successfully');
    }

    public function restore($id){
        Subcategory::withTrashed()->findorfail($id)->restore();
        return back()->with('message','Restore Trashed Sub-Category Successfully');
    }
  
    public function trash(){
        $categories=Subcategory::onlyTrashed()->get();
        return view('admin/subcategory/trash')->with(compact('categories'));
    }

    public function subcategory_delete($id)
    {
        Subcategory::where('id', $id)->forceDelete();
        return back()->with('message','Sub-Category Deleted Successfully');
        }
}
