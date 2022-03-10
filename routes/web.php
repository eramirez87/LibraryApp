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
    if(!Auth::check()){
        return view('login');
    }
    return view("welcome");
});

Route::resource('Users', App\Http\Controllers\Users::class)->middleware('auth');
Route::resource('Books', App\Http\Controllers\Books::class)->middleware('auth');
Route::resource('Categories', App\Http\Controllers\Categories::class)->middleware('auth');
Route::post("/autenticate",[\App\Http\Controllers\SessionsController::class,'autenticate'])->name("autenticate");
