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
    return view('home')->with('foto', '1_122220_ava.png');
});



Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

// Route::get('/dashboard/activity', 'ActivityController@index')->name('dashboard_activity');

// Route::post('/dashboard/activity', 'ActivityController@store');

// Route::post('/dashboard/profile', 'ProfileController@store')->name('profile.store');

// Route::get('/dashboard/profile', 'ProfileController@index')->name('dashboard_profile');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/activities', 'HomeController@activity')->name('activities');

Route::get('/profiles', 'HomeController@profiles')->name('profiles');

Route::get('/about', 'HomeController@about')->name('about');

// Route::resource('home', HomeController::class);

// Route::get('dashboard/profile/create', 'ProfileController@create');

// Route::get('dashboard/activity/create', 'ActivityController@create');

// Route::get('dashboard/profile/{id_pemain}/edit', 'ProfileController@edit');

// Route::get('dashboard/profile/{id_pemain}/delete', 'ProfileController@delete');

// Route::get('dashboard/activity/{id_pemain}/edit', 'ActivityController@edit');

// Route::get('dashboard/activity/{id_pemain}/delete', 'ActivityController@delete');

Route::get('activity/delete/{id_pemain}', 'ActivityController@delete');

Route::get('activity/edit/{id_pemain}', 'ActivityController@edit');

Route::post('activity/update/{id_pemain}', 'ActivityController@update');

Route::get('delete/{id_pemain}', 'ProfileController@delete');

Route::get('edit/{id_pemain}', 'ProfileController@edit');

Route::post('update/{id_pemain}', 'ProfileController@update');

// Route::get('back', 'ActivityController@back');

Route::resource('activity', ActivityController::class);

Route::resource('profile', ProfileController::class);
