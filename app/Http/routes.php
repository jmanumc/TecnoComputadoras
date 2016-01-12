<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('images/{folder}/{filename}', function ($folder, $filename)
{	
	$path = $folder . '/' . $filename;

	$file = Storage::get($path);
    $type = Storage::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    // Route::auth();

    // Auth
    Route::post('login', 'Auth\AuthController@login');
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::get('logout', 'Auth\AuthController@logout');
    Route::group(['prefix' => 'password'], function () {
        Route::post('email', 'Auth\PasswordController@sendResetLinkEmail');
        Route::post('reset', 'Auth\PasswordController@reset');
        Route::get('reset/{token?}', 'Auth\PasswordController@showResetForm');
    });

    Route::get('/home', 'HomeController@index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    
	Route::resource('users', 'Admin\UsersController');

});
