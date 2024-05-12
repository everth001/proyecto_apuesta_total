<?php

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
// ACA SE CREAN LAS RUTAS LINKEADAS DE LOS HEARDERS
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('especialidad', [App\Http\Controllers\EspecialidadController::class, 'index'])->name('especialidad.index');
	Route::get('especialidad/buscar', [App\Http\Controllers\EspecialidadController::class, 'buscar'])->name('especialidad.buscar');
	Route::post('especialidad/crear', [App\Http\Controllers\EspecialidadController::class, 'crear'])->name('especialidad.crear');
	Route::get('especialidad/edit', [App\Http\Controllers\EspecialidadController::class, 'edit'])->name('especialidad.edit');
	Route::post('especialidad/update', [App\Http\Controllers\EspecialidadController::class, 'update'])->name('especialidad.update');
	Route::post('especialidad/cambiarCondicion', [App\Http\Controllers\EspecialidadController::class, 'cambiarCondicion'])->name('especialidad.cambiarCondicion');


	Route::get('calendar', [App\Http\Controllers\EventCalendarController::class, 'index'])->name('calendar.index');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

