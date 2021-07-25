<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search-by-authors', function () {
    return view('search-by-authors');
})->name('front.search-by-authors');


Route::get('/search-by-titles', function () {
    return view('search-by-titles');
})->name('front.search-by-titles');


Route::get('/list-of-publications', function () {
    return view('list-of-publications');
})->name('front.list-of-publications');

Route::get('/artisan', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});

