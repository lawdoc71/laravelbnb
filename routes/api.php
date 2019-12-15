<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookables', 'Api\BookableController@index');
Route::get('bookables/{id}', 'Api\BookableController@show');
