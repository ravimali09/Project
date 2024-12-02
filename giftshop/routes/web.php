<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminnController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

// use App\Http\Middleware\webbeforelogin;
// use App\Http\Middleware\webafterlogin;

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
    /*------- Website ------*/
Route::get('/', function () {
    return view('website.index');
});
Route::get('/index', function () {
    return view('website.index');
});
Route::get('/contacts', function () {
    return view('website.contact');
});
Route::get('/shop', function () {
    return view('website.shop');
});
Route::get('/testimonial', function () {
    return view('website.testimonial');
});
Route::get('/why', function () {
    return view('website.why');
});

Route::get('/user_login',[CustomerController::class,'login'])->middleware('before_web');
Route::post('/user_auth',[CustomerController::class,'user_auth'])->middleware('before_web');
Route::get('/user_logout',[CustomerController::class,'user_logout'])->middleware('after_web');

Route::get('/profile',[CustomerController::class,'profile'])->middleware('after_web');


Route::get('/user_signup',[CustomerController::class,'create'])->middleware('before_web');
Route::post('/user_signup',[CustomerController::class,'store'])->middleware('before_web');
Route::get('/edituser/{id}',[CustomerController::class,'edituser'])->middleware('after_web');
Route::post('/update/{id}',[CustomerController::class,'update'])->middleware('after_web');


  /* ------- Admin -------*/


Route::get('/manage_contact',[ContactController::class,'show'])->middleware('after_adm');
Route::post('/contacts',[ContactController::class,'store']);
Route::post('/delete_contact/{$id}',[ContactController::class,'destroy'])->middleware('after_adm');


  



Route::get('/dashboard',[CustomerController::class,'adm_dashboard'])->middleware('after_adm');


Route::get('/cart',[CartController::class,'show'])->middleware('after_adm');
Route::get('/delete_cart/{id}',[CartController::class,'destroy'])->middleware('after_adm');


Route::get('/add_product',[ProductController::class,'create'])->middleware('after_adm');
Route::post('/add_product',[ProductController::class,'store'])->middleware('after_adm');
Route::get('/manage_product',[ProductController::class,'show'])->middleware('after_adm');
Route::get('/delete_product/{id}',[ProductController::class,'destroy'])->middleware('after_adm');


Route::get('/admin_login',[AdminnController::class,'create'])->middleware('before_adm');
Route::post('/admin_auth',[AdminnController::class,'login'])->middleware('before_adm');

Route::get('/admin_logout',[AdminnController::class,'admin_logout'])->middleware('after_adm');



Route::get('/manage_customer',[CustomerController::class,'show'])->middleware('after_adm');
Route::get('/delete_customer/{id}',[CustomerController::class,'destroy'])->middleware('after_adm');

