<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardCourseTitle;
use App\Http\Controllers\DashboardCourse;
use App\Http\Controllers\DashboardMentorController;
use App\Http\Controllers\DashboardTrusted;
use App\Http\Controllers\DashboardGraph;
use App\Http\Controllers\DashboardDevelopController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('/dashboard/header',DashboardHomeController::class)->middleware('auth');
Route::resource('/dashboard/coursetitle',DashboardCourseTitle::class)->middleware('auth');
Route::resource('/dashboard/course',DashboardCourse::class)->middleware('auth');
Route::resource('/dashboard/mentor',DashboardMentorController::class)->middleware('auth');
Route::resource('/dashboard/graph',DashboardGraph::class)->middleware('auth');
Route::resource('/dashboard/trusted',DashboardTrusted::class)->middleware('auth');
Route::resource('/dashboard/develop',DashboardDevelopController::class)->middleware('auth');
Route::resource('/dashboard/user',UserController::class)->middleware('auth');
