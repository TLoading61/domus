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
    return view('accueil');
})->name('accueil');

Route::get('livre-or', function () {
    return view('livreor');
})->name('livreor');

Route::get('photos', function () {
    return view('photos');
})->name('photos');

Route::get('reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('contact', function () {
    return view('contact');
})->name('contact');