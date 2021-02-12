<?php

use Illuminate\Routing\Router;
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

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/activities', 'HomeController@activity')->name('activities');

Route::get('/players', 'HomeController@players')->name('players');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/player_detail/{id_pemain}', 'HomeController@player_detail')->name('player_detail');

// Route::post('/activity/{id}', 'ActivityController@destroy');

Route::resource('activity', ActivityController::class);

Route::resource('profile', ProfileController::class);

Route::get('/gallery', 'HomeController@gallery')->name('gallery');
