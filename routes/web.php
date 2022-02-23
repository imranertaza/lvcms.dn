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

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/category', [CategoryController::class, 'index']);
Route::get('/admin/category/add-category', [CategoryController::class, 'create']);
Route::get('/admin/block', [BlockController::class, 'index']);
Route::get('/admin/block/add-block', [BlockController::class, 'create']);
Route::get('/admin/imagegallery', [ImageGalleryController::class, 'index']);
Route::get('/admin/login', [LoginController::class, 'index']);
Route::get('/admin/page', [PageController::class, 'index']);
Route::get('/admin/page/add-page', [PageController::class, 'create']);
Route::get('/admin/post', [PostController::class, 'index']);
Route::get('/admin/post/add-post', [PostController::class, 'create']);
Route::get('/admin/role', [RoleController::class, 'index']);
Route::get('/admin/settings', [SettingsController::class, 'index']);
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/video', [VideoGalleryController::class, 'index']);