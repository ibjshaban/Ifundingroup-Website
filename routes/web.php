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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();



Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

    Route::resource('/user', 'Dashboard\UserController');

    Route::group(['middleware' => ['checkRole']], function () {
        Route::get('admin/user')->name('user.index');
        Route::get('admin/user/create')->name('user.create');
        Route::get('admin/user')->name('user.store');
    });

});
