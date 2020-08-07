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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/dashboard/activity', 'ActivityController@index')->name('dashboard_activity');

Route::post('/dashboard/activity', 'ActivityController@store');

Route::get('/dashboard/profile', 'ProfileController@index')->name('dashboard_profile');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/activity', 'PlayersController@activity')->name('activity');

Route::get('/profiles', 'PlayersController@profiles')->name('profiles');

Route::get('/about', 'PlayersController@about')->name('about');

Route::get('dashboard/activity/create', 'ActivityController@create');

Route::get('dashboard/activity/{id}/edit', 'ActivityController@edit');

Route::get('dashboard/activity/{id}/delete', 'ActivityController@destroy');
