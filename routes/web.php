<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboard\MixController;
use App\Http\Controllers\Dashboard\MedicinesController;
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
})->name('home');

Route::resource('medicines', MedicinesController::class);
Route::resource('mix', MixController::class);

//
Route::view('login', 'login')->middleware('guest');
/* Route::view('dashboard', 'dashboard')->middleware('auth'); */

Route::post('login', function() {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials))
    {
        request()->session()->regenerate();
        return redirect('/medicines/create');
    }
    else
    {
        return redirect('login');
    }
});