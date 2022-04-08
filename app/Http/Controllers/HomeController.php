<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Attribute;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function estore(){
     return view('estore');
    }

    // public function index()
    // {
    //     $Shirts=Product::get();
    //     return view('layouts.product')->with(compact('Shirts'));
    // }

    public function productdetail($id)
    {
        $single_product=Product::with('attributes')->find($id);
        return view('layouts.productdetail')->with(compact('single_product'));
    }
    public function getProductPrice(Request $request){
        $data=$request->all();
      
        // echo "<pre>"; print_r($data); die;
    }
}
