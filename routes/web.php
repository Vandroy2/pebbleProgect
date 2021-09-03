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
    return view('main');
})->name('main');

Route::group(['prefix' => 'HWR'], function () {
    Route::get('/', function () {
        return view('HWR.index');
    })->name('HWR');
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/', function () {
        return view('about.index');
    })->name('about');
});

Route::group(['prefix' => 'sign-up'], function () {
    Route::get('/', function () {
        return view('sign-up.index');
    })->name('sign-up');
});




