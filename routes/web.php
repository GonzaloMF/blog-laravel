<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Backend\MenuController;

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
    return view('welcome');
});

Route::get('my-account', [MyAccountController::class, 'index'])->middleware('auth')->name('my-account');

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');



//Route::group(['prefix' => 'admin-backend', 'middleware' => ['auth', 'superadmin']], function () {

    //Routes for menu
    Route::get('admin-backend/menu', [MenuController::class, 'index'])->middleware('auth', 'superadmin')->name('menu');
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::get('menu', [MenuController::class, 'save'])->name('menu.save');
    Route::get('menu/save-order', [MenuController::class, 'saveOrder'])->name('menu.order');
    Route::get('menu/{id}/update', [MenuController::class, 'update'])->name('update');
    Route::get('menu/{id}/delete', [MenuController::class, 'delete'])->name('delete');

//});


