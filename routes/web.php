<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\dashboard;
use App\Http\Controllers\Dashboard\UserController;

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

Route::group(['prefix'=>'dashboard', 'as' => 'dashboard.','middleware' => ['auth','checkLogin']],function () {
    Route::get('/',[dashboard::class,'index']);
    Route::get('/setting',[dashboard::class,'setting'])->name('settings');
    Route::post('/setting/update/{setting}',[dashboard::class,'create'])->name('settings.update');
    Route::get('/user',[UserController::class,'index']);

});



Auth::routes();

