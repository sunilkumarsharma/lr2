<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [App\Http\Controllers\RegisterUserController::class, "index"])->name("/show-home");
// Route::get("/addUserFrom", [App\Http\Controllers\RegisterUserController::class, "create"])->name("/addUserFrom");
Route::resource("/RegisterData", App\Http\Controllers\RegisterUserController::class);
