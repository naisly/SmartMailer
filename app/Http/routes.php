<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// php artisan route:cache
// php artisan route:clear

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('user/{id}', 'UserController@showProfile');

    Route::group(['prefix' => 'admin'], function() {

        Route::get('detail', function() {

        });
    });

});

Route::group(['middleware' => 'old'], function() { // test

    Route::get('page/{age}', function( $age = 199) {
        return 'Hello, Your age: ' . $age;
    });
});

/*
Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::resource('photo', 'PhotoController',
        ['only' => ['index', 'show']]);

Route::resource('photo', 'PhotoController',
        ['except' => ['create', 'store', 'update', 'destroy']]);

*/
