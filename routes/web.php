<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Shop\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ShopController::class, 'index'])->name('shop.index');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('users', UserController::class);

    Route::controller(SearchController::class)->group(function () {
        Route::get('search/user', 'adminUserSearch')->name('admin.user.search');
    });
});
