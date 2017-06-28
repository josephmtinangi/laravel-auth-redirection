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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('heroes', function () {
	$users = App\User::get();
	return view('heroes', compact('users'));
})->name('heroes');

Route::get('@{username}', function ($username) {
	$user = App\User::whereUsername($username)->firstOrFail();
	return view('account.profile', compact('user'));
})->name('profile');
