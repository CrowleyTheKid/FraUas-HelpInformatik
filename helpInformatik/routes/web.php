<?php

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
});


Route::get('/analysis', function () {
    return view('pages.analysis');
});

Route::get('/algdat', function () {
    return view('pages.algdat');
});

Route::get('/c', function () {
    return view('pages.c');
});
Route::get('/rechnerarchitektur', function () {
    return view('pages.ra');
});
