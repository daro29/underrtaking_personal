<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('section.index');
});

Route::post('email','ContactController@store')->name('contact.email');
