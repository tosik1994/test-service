<?php

use App\Http\Controllers\PersonalInfoChangeController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ShowContactController;
use App\Http\Controllers\ShowServiceController;
use App\Http\Controllers\SetLanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\App;


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


Route::get('set-lang/{lang}', [SetLanguageController::class, 'change'])->name('set-lang');

Route::group(['middleware' => 'language'], function()
{
    Route::get('/', [MainPageController::class, 'index'])->name('main');
    Route::get('service/{id}', [ShowServiceController::class, 'show'])->name('service.show');
    Route::get('contacts', [ShowContactController::class, 'show'])->name('contacts');
    Route::get('personal-info', [PersonalInfoController::class, 'show'])->name('personal-info');
    Route::get('personal-info-change', [PersonalInfoController::class, 'show'])->name('personal-info-change');
    Route::get('orders', [OrderController::class, 'show'])->name('orders');
    Route::get('logout', [LoginController::class, 'logOut'])->name('logout');

  Route::group(['middleware' => 'ghost'], function()
  {
      Route::get('register', [RegisterController::class, 'show'])->name('register');
      Route::get('login', [LoginController::class, 'show'])->name('login');

  });

    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('send-feedback', [OrderController::class, 'store'])->name('send-feedback');

});

