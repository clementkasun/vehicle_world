<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VehicleMakeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestJsonController;
use App\Http\Controllers\JsonResultsController;
use App\Http\Controllers\SupportMailController;
use App\Http\Controllers\UserFavouriteController;
use App\Http\Controllers\UserNotificationController;
use App\Http\Controllers\UserReviewController;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

// Route::get('/survey_object', [ResultController::class, 'getSurveyObject']);
Route::apiResource('/json', TestJsonController::class); // get payment history by id
Route::apiResource('/result/json', JsonResultsController::class); // save json results
Route::get('/result/export/{id}', [JsonResultsController::class, 'export']); // save json results

//api rolls, privileges and users
Route::post('/rolls/rollId/{id}', [RollController::class, 'store']);
Route::delete('/rolls/rollId/{id}', [RollController::class, 'destroy']);
Route::get('/rolls/levelId/{id}', [LevelController::class, 'rollsByLevel'])->name('rolls_by_level');
Route::get('/rolls/rollPrivilege/{id}', [RollController::class, 'getRollPrevilagesById'])->name('Previlages_by_rollId');
Route::get('/user/Privileges/{id}', [UserController::class, 'previlagesById']);
Route::get('/rolls/privilege/add', [RollController::class, 'PrevilagesAdd'])->name('Previlages_add');
Route::get('/user/privilege/add/{id}', [UserController::class, 'PrevilagesAddById']);
Route::get('/user/activity/{id}', [UserController::class, 'activeStatus']);
Route::get('/user/deleted', [UserController::class, 'getDeletedUser']);
Route::put('/user/active/{id}', [UserController::class, 'activeDeletedUser']); //restore deleted users
Route::get('/user/mobile/', [UserController::class, 'getMobileUsers']); //get (Level 2) mobile users
Route::middleware('auth:api')->get('/level/institutes/id/{id}', [LevelController::class, 'instituteById'])->name('level_institues_by_id');
Route::post('/add_user', [UserController::class, 'create']); //add a user
Route::post('/auth_test', [JsonResultsController::class, 'authTest']);
Route::post('/sanctum/token', [UserController::class, 'authToken']);


//apis for post 
Route::post('/save_post', [PostController::class, 'store']);
Route::get('/get_posts', [PostController::class, 'show']);
Route::get('/get_posts_type/id/{post_id}', [PostController::class, 'edit']);
Route::get('/get_selected_post/id/{post_id}', [PostController::class, 'get_selected_post']);
Route::post('/update_post/id/{post_id}', [PostController::class, 'update']);
Route::delete('/delete_post/id/{post_id}', [PostController::class, 'destroy']);
Route::post('/filtered_posts', [PostController::class, 'filtered_posts']);
Route::get('/filter_by_main_search', [PostController::class, 'filter_by_main_search']);
Route::get('/get_trending_posts', [PostController::class, 'getTrendingPosts']);

//basic api's
Route::get('get_makes', [VehicleMakeController::class, 'get_vehicle_makes']);
Route::post('/save_customer', [CustomerController::class, 'store']);
Route::post('/is_email_nic_exist', [CustomerController::class, 'email_nic_exist']);
Route::put('/update_basic_data/id/{user_id}', [CustomerController::class, 'updateBasicData']);
Route::put('/change_password/id/{user_id}', [CustomerController::class, 'changePassword']);
Route::put('/sold_post_as_sold/id/{post_id}', [PostController::class, 'soldPost']);
Route::post('/send_mail', [SupportMailController::class, 'sendMail']);

//Analytic api's
Route::get('/get_monthly_sales', [DashboardController::class, 'getMonthlySales']);
Route::get('/get_yearly_sales', [DashboardController::class, 'getYearlySales']);
Route::get('/get_sales_vehicle_wise', [DashboardController::class, 'vehicleTypeWiseSales']);
Route::get('/get_percentages', [DashboardController::class, 'getPercentages']);

//user post review api's
Route::post('/create-post-review', [UserReviewController::class, 'create_post_review']);
Route::put('/update-post-review', [UserReviewController::class, 'update_post_review']);
Route::delete('/delete-post-review', [UserReviewController::class, 'delete_post_review']);
Route::get('/get-post-review-item', [UserReviewController::class, 'get_post_review_item']);
Route::get('/get-post-reviews/id/{post_id}', [UserReviewController::class, 'get_post_reviews']);
Route::get('/get-post-review-analytics/id/{post_id}', [UserReviewController::class, 'get_review_analytics']);

//user favourite api's
Route::post('/change-user-favourite', [UserFavouriteController::class, 'change_favourite_item']);//post delete and remove both
Route::get('/delete-user-favourite/id/{id}', [UserFavouriteController::class, 'remove_favourite_item']);//only post delete api with parameters
Route::get('/get-user-favourites', [UserFavouriteController::class, 'get_all_favourite']);//get all the favourite posts for the user
Route::get('/most-favourite-vehicles', [UserFavouriteController::class, 'mostFavouriteVehicles']);//get the most favourite 3 posts 

//notification api
Route::put('/mark-as-read/id/{notification_id}', [UserNotificationController::class, 'markAsRead']);//get the most favourite 3 posts 
