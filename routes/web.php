<?php

// this handles all routes except those that start with API
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*'); // not 100% sure this is correct
