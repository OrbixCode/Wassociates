<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
   
    public function index()
    {
      
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs=Blog::get();
    return view('admin.blog.create')->with(compact('blogs'));
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
            'title' => 'required',
            'thumbnail'=>'required',
            'description'=>'required',
            
        ]);

       
        if($request->hasfile('thumbnail')) 
        { 
           
          $file = $request->file('thumbnail');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('uploads/images/', $filename);
        
        }

        Blog::create([
        'title'=>$request->title,
        'description'=>$request->description,
        'thumbnail'=>$filename,
        ]);

        return back()->with('message','Blog Added Succcessfully');
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
    public function blog_edit($id)
    {
    
    $Blogs=Blog::find($id);
    return view('admin.blog.edit')->with(compact('Blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function blog_update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description'=>'required',
            'thumbnail'=>'required',

        ]);

        if($request->hasfile('thumbnail')) 
        { 
          $file = $request->file('thumbnail');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('uploads/images/', $filename);
        
        }


        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->thumbnail=$filename;
        $blog->save();
   
        return redirect('admin/blog/List')->with('message','Blog Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function blog_trash($id){
        $Blogs=Blog::find($id);
        $Blogs->delete();

        return back()->with('message','Blog Trashed Successfully');
    }

    public function restore($id){
        Blog::withTrashed()->findorfail($id)->restore();
        return back()->with('message','Restore Trashed Blog Successfully');
    }
  
    public function trash(){
        $categories=Blog::onlyTrashed()->get();
        return view('admin/blog/trash')->with(compact('categories'));
    }

    public function blog_delete($id)
    {
        Blog::where('id', $id)->forceDelete();
        return back()->with('message','Blog Deleted Successfully');
        }

}
