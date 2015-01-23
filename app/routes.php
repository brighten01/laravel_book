<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any("/","BookController@index");
Route::any("/book/add","BookController@add");
Route::any("/book/edit/{id}","BookController@edit");
Route::get("/book/listinfo","BookController@listinfo");
Route::get("/book/del/{id}","BookController@del");

Route::any("/user/login","UserController@login");
Route::any("/user/logout","UserController@logout");
Route::any("/user/card_login","UserController@card_login");
Route::any("/user/card_logout","UserController@card_logout");

Route::any("/card/add","CardController@addCard");
Route::any("/card/edit/{id}","CardController@edit");
Route::get("/card/listinfo","CardController@listinfo");
Route::get("/card/del/{id}","CardController@del");

Route::any("/borrow/info/{id}","BorrowController@info");
Route::any("/book/addtype","BookController@addtype");
Route::any("/book/typelist","BookController@typelist");