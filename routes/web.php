<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/login_cust', function () {
    return view('auth.login');
})->name('login_cust');
Route::get('/register_customer', [CustomerController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/dashboard', [PostController::class, 'index']);
Route::get('/home', [PostController::class, 'index']);
Route::get('/post_filtered', function () {
    return view('post_filtered');
});
Route::get('/logout', [CustomerController::class, 'logout']); # post
Route::middleware(['auth:sanctum', 'verified'])->get('/post_registration', function () {
    return view('/registration/post_registration');
})->name('post_registration');
Route::get('/test', [PostController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user_profile', [CustomerController::class, 'myProfile']);
Route::middleware(['auth:sanctum', 'verified'])->get('/post_edit/id/{post_id}', [PostController::class, 'get_post_update_form']);
Route::get('/about_us', function(){
    return view('about_us');
});
