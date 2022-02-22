<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\frontend\HomeController;
use App\Http\Controllers\admin\frontend\DashboardController;
use App\Http\Controllers\admin\frontend\BlockController;
use App\Http\Controllers\admin\frontend\CategoryController;
use App\Http\Controllers\admin\frontend\ImageGalleryController;
use App\Http\Controllers\admin\frontend\LoginController;
use App\Http\Controllers\admin\frontend\PageController;
use App\Http\Controllers\admin\frontend\PostController;
use App\Http\Controllers\admin\frontend\RoleController;
use App\Http\Controllers\admin\frontend\SettingsController;
use App\Http\Controllers\admin\frontend\UsersController;
use App\Http\Controllers\admin\frontend\VideoGalleryController;

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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', [HomeController::Class, 'index']);
Route::get('/admin/dashboard', [DashboardController::Class, 'index']);
Route::get('/admin/category', [CategoryController::Class, 'index']);
Route::get('/admin/block', [BlockController::Class, 'index']);
Route::get('/admin/imagegallery', [ImageGalleryController::Class, 'index']);
Route::get('/admin/login', [LoginController::Class, 'index']);
Route::get('/admin/page', [PageController::Class, 'index']);
Route::get('/admin/post', [PostController::Class, 'index']);
Route::get('/admin/role', [RoleController::Class, 'index']);
Route::get('/admin/settings', [SettingsController::Class, 'index']);
Route::get('/admin/users', [UsersController::Class, 'index']);
Route::get('/admin/video', [VideoGalleryController::Class, 'index']);