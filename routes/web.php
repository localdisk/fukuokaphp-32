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

Route::view('/', 'top')->name('top');

Route::group(['middleware' => 'guest'], function () {
    Route::livewire('/register', 'register')->name('register');
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/password/reset', 'password-reset-request-form')->name('password.request');
    Route::livewire('/password/reset/{token}', 'password-reset-form')->name('password.reset');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::view('/home', 'home')->name('home');
});
