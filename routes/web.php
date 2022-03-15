<?php

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
// use App\Http\Controllers\HomeController; 

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

//backend
use App\Http\Controllers\AdminController;
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//Category Product
use App\Http\Controllers\CategoryProduct;
//Thêm sản phẩm
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
//Sửa nhập sản phẩm
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');

//Xoá nhập sản phẩm
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');

//Cập nhập nhập sản phẩm
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Lấy tất cả sản phẩm
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

//Kích hoạt
Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

//Lưu sản phẩm
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');

