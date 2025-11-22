<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/medecin', function () {
    return view('home.medecin');
})->name('medecin');

Route::get('/news', function () {
    return view('home.news');
})->name('news');
Route::get('/blog', function () {
    return view('home.blog');
})->name('blog');

Route::get('/apropos', function () {
    return view('home.apropos');
})->name('apropos');

Route::get('/service', function () {
    return view('home.service');
})->name('service');