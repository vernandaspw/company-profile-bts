<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('login', [AuthController::class, 'loginView']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('admin/', [DashboardController::class, 'index']);
    Route::get('admin/setting', [SettingController::class, 'index']);
    Route::put('admin/setting', [SettingController::class, 'ubah']);

    Route::get('admin/produk', [ProductController::class, 'index']);
    Route::get('admin/produk/tambah', [ProductController::class, 'tambahView']);
    Route::post('admin/produk/tambah', [ProductController::class, 'store']);
    Route::get('admin/produk/delete/{id}', [ProductController::class, 'delete']);

    Route::get('admin/partner', [PartnerController::class, 'index']);
    Route::get('admin/partner/tambah', [PartnerController::class, 'tambahView']);
    Route::post('admin/partner/tambah', [PartnerController::class, 'store']);
    Route::get('admin/partner/delete/{id}', [PartnerController::class, 'delete']);

});