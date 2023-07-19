<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
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

Route::get('/news',[DashboardPostController::class,'index']);
Route::get('/news/posts/checkSlug',[DashboardPostController::class,'checkSlug']);
Route::resource('/news/posts', DashboardPostController::class);
// Route::get('/news',[DashboardPostController::class,'index']);
// Route::get('/news/posts/checkSlug',[DashboardPostController::class,'checkSlug']);
// Route::resource('/news/posts', DashboardPostController::class);
