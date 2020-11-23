<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\Mobile\UserCardController;



use App\Http\Controllers\Mobile\HomeController as MobileHomeController;
use App\Http\Controllers\Mobile\UserChildController;
use App\Http\Controllers\Mobile\ContentController;
use App\Http\Controllers\Mobile\CardListController;
use App\Http\Controllers\Mobile\FeedController;

use App\Http\Controllers\Mobile\CoverController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//FIXME : FOR LEARN NABILA
Route::resource('mobile/v1/cover', CoverController::class);


Route::prefix('v1/auth')->group(function () {

    Route::post('google/login',             [AuthGoogleController::class, 'login']);
    Route::post('login',                    [AuthController::class, 'login']);
    Route::get('logout',                    [AuthController::class, 'logout']);
    Route::get('me',                        [AuthController::class, 'me']);

});


Route::middleware(['jwt.verify'])->prefix('mobile/v1')->group(function () {

    Route::get('home',                      [MobileHomeController::class, 'index']);
    Route::get('home/feed',                 [MobileHomeController::class, 'feed']);

    Route::resource('userchild',            UserChildController::class);
    Route::resource('usercard',             UserCardController::class);
    Route::post('usercard/{id}/content',    [UserCardController::class, 'store_content']);
    Route::delete('usercard/{id}/content',  [UserCardController::class, 'destroy_content']);

    Route::get('content/{id}',              [ContentController::class, 'show']);

});

























Route::prefix('admin/v1')->group(function () {

    // Route::post('finance',      [AuthGoogleController::class, 'post']);

});


Route::prefix('studio/v1')->group(function () {

    // Route::post('newvideo',      [AuthGoogleController::class, 'post']);

});


Route::prefix('public/v1')->group(function () {

    // Route::post('blog',      [AuthGoogleController::class, 'post']);

});
