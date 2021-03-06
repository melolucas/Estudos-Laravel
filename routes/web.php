<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SendController;

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

Route::get('/', [SendController::class, 'index']);
Route::post('submit', [SendController::class, 'save']);

Route::view('form', 'homepage');