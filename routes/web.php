<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Graduate;
use App\Models\Notifications;
use App\Models\Vacancy;
use App\Notifications\VacancyNotification;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Notification;
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

Route::get('/register_customer', function () {
    return view('auth.CustomerRegister');
});

Route::get('/', [PostController::class, 'index']);
Route::get('/dashboard', [PostController::class, 'index']);
// Route::any('/filtered_posts', [PostController::class, 'filtered_adds']);
Route::get('/home', [PostController::class, 'index']);
Route::get('/post_filtered', function () {
    return view('post_filtered');
});
Route::get('/post_profile', function () {
    return view('post_profile');
});

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']); # post

#graduate registration
Route::middleware(['auth:sanctum', 'verified'])->get('/post_registration', function () {
    return view('/registration/post_registration');
})->name('post_registration');

Route::get('/test', [PostController::class, 'index_two']);

Route::get('/seller_profile', function () {
    return view('seller_profile');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user_profile', [UserController::class, 'myProfile']);
