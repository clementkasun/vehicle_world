<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserFavouriteController;
use App\Models\Notifications;

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

Route::get('/logout', [CustomerController::class, 'logout']); # post
Route::get('/', [PostController::class, 'index']);
Route::get('/register_customer', [CustomerController::class, 'index'])->name('register_customer');

//post and favourite web routes
Route::middleware(['auth:sanctum', 'verified'])->get('/post_edit/id/{post_id}', [PostController::class, 'get_post_update_form']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user-messeges', [CustomerController::class, 'userMessegesView']);
Route::middleware(['auth:sanctum', 'verified'])->get('/direct-message/user_id/{user_id}', [CustomerController::class, 'directMessageView']);
Route::middleware(['auth:sanctum', 'verified'])->post('/send-message/user_from/{user_from}/user_to/{user_to}', [CustomerController::class, 'sendDirectMessage']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user_profile', [CustomerController::class, 'myProfile']);
Route::middleware(['auth:sanctum', 'verified'])->get('/post_edit/id/{post_id}', [PostController::class, 'get_post_update_form']);
Route::middleware(['auth:sanctum', 'verified'])->get('/analysis', [DashboardController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/create-post', [PostController::class, 'post_reg_form'])->name('create-post');
Route::middleware(['auth:sanctum', 'verified'])->get('/get_post_profile/id/{post_id}', [PostController::class, 'get_post_profile']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user-favourite-page/id/{user_id}', [UserFavouriteController::class, 'index_data']);
Route::post('/filtered_posts', [PostController::class, 'filtered_posts']);


//basic web routes
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contacts', function () {
    return view('contacts');
});

//get all the user notifications
Route::middleware(['auth:sanctum', 'verified'])->get('/user-notifications', function () {
    $notifications = Notifications::all();
    return view('notifications', compact('notifications'));
});

