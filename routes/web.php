<?php

use App\Http\Controllers\userController;
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

Route::get('/', [
    userController::class,"index"
]);

Route::get('/login', [
    userController::class,"login"
]);

Route::get('/data',[
    userController::class,"data"
]);

Route::get('/delete/{id}',[
    userController::class,"delete"
]);

