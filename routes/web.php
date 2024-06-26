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

	Route::get('recarga', [App\Http\Controllers\RecargaController::class, 'view'])->name('view.recarga');
	Route::get('recarga/listar', [App\Http\Controllers\RecargaController::class, 'index'])->name('listar.recarga');
	Route::post('recarga/crear', [App\Http\Controllers\RecargaController::class, 'create'])->name('crear.recarga');
	
	Route::get('cliente/buscar_cliente', [App\Http\Controllers\ClienteController::class, 'show'])->name('buscar.cliente');

	Route::get('canal/listar', [App\Http\Controllers\CanalController::class, 'index'])->name('listar.canal');
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});