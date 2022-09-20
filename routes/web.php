<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboard\MixController;
use App\Http\Controllers\Dashboard\MedicinesController;
use App\Http\Controllers\Dashboard\MedClientController;
use App\Http\Controllers\Dashboard\MixClientController;
use App\Http\Controllers\LoginController;
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
Route::resource('medclient', MedClientController::class);
Route::resource('mixclient', MixClientController::class);

// Login
Route::view('login', 'login');

Route::post('login', function() {  
    $credentials = request()->only('email', 'password');
    $temporal = Arr::get($credentials, 'password');
    echo $temporal;

    if (Auth::attempt($credentials))
    {
        if($temporal == "pepian")
        {
            request()->session()->regenerate();
            return redirect('/medicines/create');
        }    
        else if($temporal == "pizza")
        {
            request()->session()->regenerate();
            return redirect('/medclient');
        }
        else
            return redirect('login');
    }
    else
    {
        return redirect('login');
    }
});

// Logout
Route::view('logout', 'logout');

Route::get('logout', function(){
    /* $cookie = Cookie::forget('myCookie');
    return redirect('/login')->withCookie($cookie); */
    return redirect('/login');
});