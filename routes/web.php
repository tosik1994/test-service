<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ShowContactController;
use App\Http\Controllers\ShowServiceController;
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

Route::get('/',[MainPageController::class, 'index'])->name('main');
Route::get('service/{id}', [ShowServiceController::class, 'show'])->name('service.show');
Route::get('contacts', [ShowContactController::class, 'show'])->name('contacts');


Route::post('/send-feedback', [FeedbackController::class, 'store'])->name('send-feedback');
