<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicationController;
USE App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'prefix' => 'publications',
], function () {

    Route::get('search/authors', [PublicationController::class, 'searchByAuthor']);
    Route::get('search/titles', [PublicationController::class, 'searchByTitle']);
    Route::get('', [PublicationController::class, 'index']);
    Route::post('', [PublicationController::class, 'store']);
    Route::get('{publication}', [PublicationController::class, 'show']);

});


Route::group([
    'prefix' => 'authors',
], function () {

    Route::post('', [AuthorController::class, 'store']);

});

Route::group([
    'prefix' => 'categories',
], function () {

    Route::post('', [CategoryController::class, 'store']);
    Route::get('', [CategoryController::class, 'index']);

});

