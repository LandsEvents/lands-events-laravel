<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events', function () {
    return (new App\Http\Controllers\EventController)->getAll();
});

Route::get('/events/{id}', function (int $id) {
    return (new App\Http\Controllers\EventController)->getId($id);
});

Route::get('/news', function () {
    return (new App\Http\Controllers\NewsController())->getAll();
});

Route::get('/news/{id}', function (int $id) {
    return (new App\Http\Controllers\NewsController())->getId($id);
});

Route::get('/albums', function () {
    return (new App\Http\Controllers\AlbumController())->getAll();
});

Route::get('/albums/{id}', function (int $id) {
    return (new App\Http\Controllers\AlbumController())->getId($id);
});
