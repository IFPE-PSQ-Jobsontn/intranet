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

Route::get('/', 'HomeController@home')->name('index');

Auth::routes();

Route::prefix('admin')->group(function (){
    Route::group([
        'namespace'     => 'Admin\\',
        'as'            => 'admin.',
        'middleware'    => 'auth'
    ], function(){
        Route::resource('users','UsersController');
    });
    Route::group([
        'namespace'     => 'Admin\\',
        'as'            => 'admin.',
        'middleware'    => 'auth'
    ], function(){
        Route::resource('roles','RolesController');
    });
    Route::group([
        'namespace'     => 'Admin\\',
        'as'            => 'admin.',
        'middleware'    => 'auth'
    ], function(){
        Route::resource('people','PeopleController');
    });
});
