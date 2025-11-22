<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/medecin', [HomeController::class, 'medecin'])->name('medecin');

Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::match (['post', 'get'], '/dashboard',[HomeController::class, 'dashboard'], ) ->name('dashboard');
/*

Route::match(['post','get'], '/login',[LoginController::class, 'login'])->name('login');
Route::match(['post','get'], '/register',[LoginController::class, 'register'])->name('register');
*/