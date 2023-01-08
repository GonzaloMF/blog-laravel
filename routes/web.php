<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\LogoutController;

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

