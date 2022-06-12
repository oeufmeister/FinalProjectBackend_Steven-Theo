<?php

use App\Http\Controllers\ProductController;
use App\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@product')->name('product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('products', function(){
//     $product = DB::table('products')->get();
//     return view('products', ['product'=>$product]);
// });

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    
});
