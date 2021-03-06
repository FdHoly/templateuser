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
    return view('index');
})->name("index");

Route::get('/profile', function () {
    return view('profile');
})->name("profile");

Route::get('/signup', function () {
    return view('signup');
})->name("signup");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/friends', function () {
    return view('friends');
})->name("friends");

Route::get('/pengumuman', function () {
    return view('pengumuman');
})->name("pengumuman");

Route::get('/organisasi/kbmti', function () {
    return view('proforganisasi');
});
Route::get('/editprofile', function () {
    return view('editprofile');
})->name("editprofile");;

Route::get('/laporan', function () {
    return view('reportview');
})->name("laporan");


Route::get('/organisasi', function () {
    return view('listorg');
})->name("listorg");

Route::get('/organisasibaru', function () {
    return view('grupbaru');
})->name("grupbaru");

