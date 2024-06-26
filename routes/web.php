<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/mainpage', function(){
    return view('forum');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createevent', function () {
    return view('eventcrt');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/eventjoined', function () {
    return view('eventjoined');
});
Route::get('/myevent', function () {
    return view('myevent');
});
Route::get('/detailevent', function () {
    return view('detailevent');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/comment', function () {
    return view('commentcard');
});