<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home', ['name' => 'James T Kirk']);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About', ['name' => 'James T Kirk']);
});

Route::get('/playground', function () {
    return Inertia::render('Playground', []);
})->name('playground');

Route::post('/save-idea', function () {
    return to_route('home');
});