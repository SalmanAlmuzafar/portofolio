<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/project', function () {
    return view('project');
});

