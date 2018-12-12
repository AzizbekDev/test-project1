<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cp', 'Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('/cp', 'Admin\Auth\LoginController@login');
Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

Route::group([
    'prefix' => 'cp',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.index');
    });
});
Route::post('/test', function(){
    return 'test';
});