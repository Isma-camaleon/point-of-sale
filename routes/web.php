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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// ROUTES

// Envolvemos todas las rutas ya que se requiere utenticación
Route::middleware(['auth'])->group(function(){

   
    // ROLES
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
            ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
            ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
            ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
            ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
            ->middleware('permission:roles.show');

    Route::post('roles/destroy', 'RoleController@destroy')->name('roles.destroy')
            ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
            ->middleware('permission:roles.edit');

   
    // USUARIOS
    Route::post('users/store', 'UserController@store')->name('users.store')
            ->middleware('permission:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
            ->middleware('permission:users.index');

    Route::get('users/listar', 'UserController@listarJson')->name('users.listar')
            ->middleware('permission:users.index');

    Route::get('users/create', 'UserController@create')->name('users.create')
            ->middleware('permission:users.create');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
            ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
            ->middleware('permission:users.show');

    Route::post('users/disable', 'UserController@disable')->name('users.disable')
            ->middleware('permission:users.status');

    Route::post('users/enable', 'UserController@enable')->name('users.enable')
            ->middleware('permission:users.status');


    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
            ->middleware('permission:users.edit');

    Route::get('miPerfil', 'UserController@miPerfil')->name('users.miPerfil');
    Route::post('/cambiarPassword', 'UserController@cambiarPassword')->name('users.cambiarPassword');



});
