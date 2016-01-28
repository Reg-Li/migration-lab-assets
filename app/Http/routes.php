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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{id}', ['as' => 'posts.show', function($id) {
    return '新增第 ' . $id . ' 篇文章';
}]);

Route::group(['prefix' => 'maintain', 'domain' => 'www.myapp.com'], function() {
    Route::get('posts/{id}', ['as' => 'posts.maintain', function($id) {
        return '管理第 ' . $id . ' 篇文章';
    }]);
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

Route::group(['middleware' => ['web']], function () {
    //
});
