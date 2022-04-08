<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Attribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $categories=Category::get(["title","id"]);
        $brands=Brand::all();
        return view('admin.product.index')->with(compact('categories','brands'));
    }

    public function getSubcategory(Request $request){
        $subcat =Subcategory::get()
        ->where("category_id",$request->category_id)
        ->pluck("subcategory","id");
        return response()->json($subcat);
    }

    public  function  search(){
        $search=$_GET['query'];
        $Products=Product::where('title','LIKE','%'.$search.'%')->get();
        return view('admin.product.create')->with(compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Category::all();
        $categories =Subcategory::get();
        $brands=Brand::all();
        $Products=Product::with('category','getsubcategories','getbrands')->get();
        return view('admin.product.create')->with(compact('Products','categories','brands'));
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
            'title'=>'required',
            'description'=>'required',
            'thumbnail'=>'required|mimes:jpeg,png,jpg|max:2048',
            'status'=>'required',
            'regular_price'=>'required',
            'category_id'=>'required',
        ]);

        if($request->hasfile('thumbnail')) 
{ 
  $file = $request->file('thumbnail');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('uploads/images/', $filename);

}

$product=Product::create([
    'title'=>$request->title,
    'description'=>$request->description,
    'regular_price'=>($request->regular_price) ? $request->regular_price : 0,
    'sale_price'=>($request->sale_price) ? $request->sale_price : 0,
    'sale_start'=>($request->sale_start) ? $request->sale_start : 0,
    'sale_end'=>($request->sale_end) ? $request->sale_end : 0,
    'status'=>$request->status,
    'category_id'=>$request->category_id,
    'subcat_id'=>$request->subcat_id,
    'brand_id'=>$request->brand_id,
    'thumbnail'=>$filename,
    'featured'=>($request->featured) ? $request->featured : 0,
    'options'=>($request->options) ? $request->options : 0,
    ]);

    // dd($product);

    return back()->with('message','Product Added Successfully');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */



     public function product_edit($id){
         $product=Product::with('attributes')->find($id);
         $categories=Category::all();
         $brands=Brand::all();
         return view('admin.product.edit')->with(compact('product','categories','brands'));
     }

     public function product_attribute(Request $request,$id){
        $product=Product::find($id);
        if($request->isMethod('post')){
            $data=$request->all();
        //    echo "<pre>";print_r($data);die;
        foreach($data['sku'] as $key=>$val){
            if(!empty($val)){
          $attrCountSku=Attribute::where('sku',$val)->count();
          if($attrCountSku>0){
              return back()->with('message','SKU is already exist so plz add another sku');
          }

          $attrCountSize=Attribute::where(['product_id'=>$id,'size'=>$data['size'][$key]])->count();
          if($attrCountSize>0){
              return back()->with('message',''.$data['size'][$key].'Size is already exist so plz add another size');
          }
          $attribute=new Attribute();
          $attribute->product_id=$id;
          $attribute->sku=$val;
          $attribute->size=$data['size'][$key];
          $attribute->price=$data['price'][$key];
          $attribute->stock=$data['stock'][$key];
          $attribute->save();
        }
       }
       return back()->with('message','Attribute Added Successfully');
     }
        return view('admin.product.attribute')->with(compact('product'));
    }


    public function product_view($id){

        $products=Product::find($id);

        return  view('layouts.productdetail')->with(compact('products'));
    }


     public function product_update(Request $request,$id)
    {
        // dd($request->all());
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'thumbnail'=>'required|mimes:jpeg,png,jpg|max:2048',
            'status'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ]);

        if($request->hasfile('thumbnail')) 
{ 
  $file = $request->file('thumbnail');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('uploads/images/', $filename);

}
$product=Product::find($id);
$product->title=$request->title;
$product->description=$request->description;
$product->regular_price=($request->regular_price) ? $request->regular_price : 0;
$product->sale_price=($request->sale_price) ? $request->sale_price : 0;
$product->sale_start=($request->sale_start) ? $request->sale_start : 0;
$product->sale_end=($request->sale_end) ? $request->sale_end : 0;
$product->status=$request->status;
$product->category_id=$request->category_id;
$product->subcat_id=$request->subcat_id;
$product->brand_id=$request->brand_id;
$product->thumbnail=$filename;
$product->featured=($request->featured) ? $request->featured : 0;
$product->options=($request->options) ? $request->options : 0;
    

$product->save();
    return redirect('admin/product/create')->with('message','Product Update Successfully');

    
}


public function delete_attribute($id){
    $attribute=Attribute::find($id)->delete();
    return back()->with('message','Attribute Deleted Successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
 public function product_delete($id){
     $product=Product::find($id);
     $product->forceDelete();
     return back()->with('message','Product Delete Successfully');
 }


    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}



              <!-- @foreach($doctors as $doctor)
                                        <tr>
                                            <td>{{$doctor->id}}</td>
                                            <td>{{$doctor->doctor_name}}</td>
                                            <td>{{$doctor->doctor_type}}</td>
                                            <td>{{$doctor->doctor_phone}}</td>
                                            <td>{{$doctor->created_at}}</td>
                                            <td>
                                            <a href="#" class="btn btn-primary  editdrbutton custeditbut">Edit</a>
                                            <a href="#" class="btn btn-secondary  deletedrbutton custeditbut">Delete</a>
                                        </td>
                                           
                                        </tr>
                                     @endforeach -->

{{ $doctors->links() }}
