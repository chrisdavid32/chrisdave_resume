<?php

use App\Http\Controllers\sendMessageController;
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
Route::get('/', [sendMessageController::class, 'index'])->name('home');
Route::post('store', [sendMessageController::class, 'store'])->name('mail');
Route::get('check_message', [sendMessageController::class, 'check'])->name('messages');
