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
    return view('pages.home');
})->name('home');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contatti');

Route::get('/whoAm', function () {
    return view('pages.whoAm');
})->name('chiSono');

Route::get('/whoSpeak', function () {
    return view('pages.whoSpeak');
})->name('aChiMiRivolgo');

Route::get('/friends', function () {
    return view('pages.friends');
})->name('friend');