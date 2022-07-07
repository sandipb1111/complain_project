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





Route::group(['middleware' => ['AuthCheck']],function(){
    Route::get('/admin/post',[PostController::class,'index'])->name("admin.post");
    Route::get('/admin/login',[MainController::class,'login'])->name("auth.login");
    Route::get('/admin/register',[MainController::class,'register'])->name("auth.register");


});
