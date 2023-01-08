<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\PostController;


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

/* Route::get('/', function () {
    return view('theme.back.login');
});

Route::get('my-profile', function () {
    return view('theme.back.app');
});

*/

Route::get('/', function () {
    return view('theme.front.index');
});

/** Logout */
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

/** Admin board */
Route::get('my-account', [MyAccountController::class, 'index'])->middleware('auth')->name('my-account');

/** Post */
Route::get('post', [PostController::class, 'index'])->name('post');
Route::post('post/create', [PostController::class, 'create'])->name('post.create');
Route::put('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('post', [PostController::class, 'save'])->name('post.save');
Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/{post}/delete', [PostController::class, 'delete'])->name('post.delete');


//Route::group(['prefix' => 'admin-backend', 'middleware' => ['auth', 'superadmin']], function () {

    //Routes for menu
    /*
    //Route::get('menu', [MenuController::class, 'index'])->middleware('auth', 'superadmin')->name('menu');
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('menu', [MenuController::class, 'save'])->name('menu.save');
    Route::post('menu/save-order', [MenuController::class, 'saveOrder'])->name('menu.order');
    Route::put('menu/{id}/update', [MenuController::class, 'update'])->name('update');
    Route::delete('menu/{id}/delete', [MenuController::class, 'delete'])->name('delete');
    */

//});
