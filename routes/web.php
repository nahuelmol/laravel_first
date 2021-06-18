<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/aboutus',function () {
    return view('aboutus');
});

Route::get('/resources', function () {
	return view('resources');
});
