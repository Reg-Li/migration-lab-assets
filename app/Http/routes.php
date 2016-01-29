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

/**
 * Route Pattern
 */
Route::pattern('id', '[0-9]+');

Route::get('hello/{name?}', function ($name = 'Everybody') {
    $data = ['name' => $name];
    return view('index', $data);
    // return view('index', $data)->with('name', $name);
});

Route::get('about', ['as' => 'about', function () {
    return view('about');
}]);

Route::get('services', ['as' => 'services', function () {
    return view('services');
}]);

Route::get('portfolio', ['as' => 'portfolio', function () {
    return view('portfolio');
}]);

Route::get('contact', ['as' => 'contact', function () {
    return view('contact');
}]);

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

Route::group(['middleware' => ['web']], function () {
    //
});
