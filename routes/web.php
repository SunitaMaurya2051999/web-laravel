<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ThankyouController;
use App\Http\Controllers\Frontend\LoginController;
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

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/thankyou',[ThankyouController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login-user',[LoginController::class,'login_user']);
