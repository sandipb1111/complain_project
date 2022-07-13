<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () { return view('welcome'); });
Route::get('/admin/logout',[MainController::class,'logout'])->name("auth.logout");
Route::post('/admin/check',[MainController::class,'check'])->name("auth.check");
Route::get('/user/homepage',[PostController::class,'create'])->name("admin.homepage");
Route::get('/admin/category',[MainController::class,'category'])->name("admin.category");
Route::get('/admin/homepage',[MainController::class,'homepage'])->name("admin.homepage");
Route::get('/admin/category',[MainController::class,'category'])->name("auth.category");
Route::get('/admin/community',[MainController::class,'community'])->name("auth.community");






Route::group(['middleware' => ['AuthCheck']],function(){
    Route::get('/admin/complain',[PostController::class,'complaint'])->name("auth.complain");
    Route::get('/auth/post',[PostController::class,'index'])->name("auth.post");
    Route::get('/admin/post/{id}',[PostController::class,'index'])->name("admin.post");
    Route::get('/admin/register',[MainController::class,'register'])->name("auth.register");
    Route::get('/admin/login',[MainController::class,'login'])->name("auth.login");






});
