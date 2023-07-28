<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::inertia('/', 'Home', [
    'laravelVersion' => \Illuminate\Foundation\Application::VERSION,
    'phpVersion' => PHP_VERSION,
])->name('home');

Route::inertia('/page/1', 'Page1', [
    'title' => 'Page 1',
    'data' => fn () => Str::random(),
]);

Route::inertia('/page/2', 'Page2', [
    'title' => 'Page 2',
    'data' => fn () => Str::random(),
]);
