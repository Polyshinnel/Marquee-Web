<?php

use App\Http\Controllers\Pages\IndexPageController;
use App\Http\Controllers\Pages\MansonsKitchenController;
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

Route::get('/', IndexPageController::class)->name('index');
Route::get('/mesons', MansonsKitchenController::class)->name('mesons');