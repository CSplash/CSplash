<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DeactiveController;
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

/*-- Auth --*/
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::get('/user', [RegisterController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/user/register', [RegisterController::class, 'register'])->name('user.exec.register');

/*-- Memo edit --*/
Route::group(['middleware' => ['auth']], function() {
    Route::get('/memo', [MemoController::class, 'index'])->name('memo.index');
    Route::get('/memo/add', [MemoController::class, 'add'])->name('memo.add');
    Route::get('/memo/select', [MemoController::class, 'select'])->name('memo.select');
    Route::post('/memo/update', [MemoController::class, 'update'])->name('memo.update');
    Route::post('/memo/delete', [MemoController::class, 'delete'])->name('memo.delete');
    Route::get('logout', [LoginController::class, 'logout'])->name('memo.logout');
});

/*-- MyPage --*/
Route::view('/user/mypage', 'mypage')->name('user.mypage');
Route::get('/deactive', [DeactiveController::class, 'showDeactiveForm'])->name('deactive.form');
Route::post('/deactive', [DeactiveController::class, 'deactive'])->name('deactive');

Auth::routes();
