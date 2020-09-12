<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('todos','TodosController@index');
Route::get('todos/{todo}','TodosController@show');
Route::get('new-todos','TodosController@create');
Route::post('store-todos','TodosController@store');
Route::get('todos/{todo}/edit','TodosController@edit');
Route::post('todos/{todo}/update-todos','TodosController@update');
Route::get('todos/{todo}/delete','TodosController@destroy');
Route::get('todos/{todo}/complete','TodosController@complete');
