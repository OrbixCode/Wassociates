<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Input;
use App\Property;
use App\Blog;
use App\Category;
use App\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
   $properties=Property::get();
   $blogs=Blog::get();
   $galleries=Gallery::get();
    return view('layouts.app')->with(compact('properties','blogs','galleries'));
});
Route::get('/login', function () {
   
    return view('auth.login');
});

Auth::routes();


Route::group(['as'=>'admin.','middleware'=>['auth','admin'], 'prefix'=>'admin'],function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::resource('property','PropertyController');
    Route::resource('category','CategoryController');
    Route::resource('profile','ProfileController');
    Route::post('category/store','CategoryController@store');
    Route::post('property/store','PropertyController@store');
    Route::get('gallery','PropertyController@create1')->name('gallery.create1');
    Route::post('gallery/store','PropertyController@gallerystore');
    Route::get('gallery/show','PropertyController@show')->name('gallery.show');
    Route::post('profile/store','ProfileController@store');
    Route::post('color/store','ColorController@store');
});

Route::get('admin/gallery/delete/{id}','PropertyController@galleryDelete');
Route::get('user/delete/{id}','ProfileController@delete');
// Backend Categories Routes
Route::get('category/delete/{id}','CategoryController@category_delete');
Route::get('category/trash/{id}','CategoryController@category_trash');
Route::get('category/restore/trash/category/{id}','CategoryController@restore');
Route::get('category/trash','CategoryController@trash');
Route::get('category/edit/{id}','CategoryController@category_edit');
Route::post('category/update/{id}','CategoryController@category_update');

// Backend blog Routes
Route::get('admin/blog/index','BlogController@index')->name('admin.blog.index');
Route::post('admin/blog/store','BlogController@store');
Route::get('admin/blog/create','BlogController@create')->name('admin.blog.create');
Route::get('blog/delete/{id}','BlogController@blog_delete');
Route::get('blog/trash/{id}','BlogController@blog_trash');
Route::get('blog/restore/trash/category/{id}','BlogController@restore');
Route::get('blog/trash','BlogController@trash');
Route::get('blog/edit/{id}','BlogController@blog_edit');
Route::post('blog/update/{id}','BlogController@blog_update');


// Backend Products Routes
Route::get('property/edit/{id}','PropertyController@property_edit');
Route::get('property/view/{id}','PropertyController@property_view');
Route::post('property/update/{id}','PropertyController@property_update');
Route::get('property/delete/{id}','PropertyController@property_delete');



Route::get('get-states-by-country','ProfileController@getState');
Route::get('get-cities-by-state','ProfileController@getCity');

//sociallite log



Route::get('login/user','ProfileController@login')->name('auth.login');
Route::resource('/contact-form','ContactFormController');
Route::get('mail',function(){
    $data= [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('info@waassociates.com.pk')->send(new \App\Mail\ContactMail($data));
   
    dd("Email is Sent.");
});
