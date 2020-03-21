<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function() {

// headerに名前表示
    Route::get('/getUsers', 'UsersController@getUsers');

	// 登録todo表示
    Route::get('/get', 'TodosController@getTodos');

	// todo登録
    Route::post('/add', 'TodosController@addTodo'); 

    // todo削除
    Route::post('/del',  'TodosController@destroy');

    // user情報更新
    Route::put('/update',  'UsersController@updateUsers');

});
