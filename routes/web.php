<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cp', function () {
    return view('admin.pages.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
