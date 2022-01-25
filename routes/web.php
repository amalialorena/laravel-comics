<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@index');

Route::get('test', 'HomeController@test') -> name('test');

