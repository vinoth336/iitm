<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('home');

Route::get('/projects', function () {
    return view('site.projects');
})->name('projects');

