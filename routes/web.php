<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

/* logout page to login page redirect code.. */
Route::get('/', function(){
    return Redirect::to('/login', 301);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\admin\RegisterController::class, 'add'])->name('add');
Route::post('/addinsert', [App\Http\Controllers\admin\RegisterController::class, 'addinsert']);

Route::get('/admin/user', [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin/user');

/* Login check */
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class,'checkAdminLogin'])->name('admin/login');
