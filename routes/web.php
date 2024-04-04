<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard/events', [\App\Http\Controllers\EventController::class, 'index'])->name('events.index');

Route::get('/dashboard/events/create', [\App\Http\Controllers\EventController::class, 'create'])->name('events.create');

Route::post('/dashboard/events', [\App\Http\Controllers\EventController::class, 'store'])->name('events.store');

Route::delete('/dashboard/events/delete/{id}', [\App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');

Route::get('/dashboard/events/edit/{id}', [\App\Http\Controllers\EventController::class, 'edit'])->name('events.edit');

Route::post('/dashboard/events/{id}', [\App\Http\Controllers\EventController::class, 'update'])->name('events.update');

Route::get('/dashboard/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');

Route::get('/dashboard/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');

Route::post('/dashboard/news', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');

Route::delete('/dashboard/news/delete/{id}', [\App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/dashboard/news/edit/{id}', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');

Route::post('/dashboard/news/{id}', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');

Route::get('/dashboard/albums', [\App\Http\Controllers\AlbumController::class, 'index'])->name('albums.index');

Route::get('/dashboard/albums/create', [\App\Http\Controllers\AlbumController::class, 'create'])->name('albums.create');

Route::post('/dashboard/albums', [\App\Http\Controllers\AlbumController::class, 'store'])->name('albums.store');

Route::delete('/dashboard/albums/delete/{id}', [\App\Http\Controllers\AlbumController::class, 'destroy'])->name('albums.destroy');

Route::get('/dashboard/albums/edit/{id}', [\App\Http\Controllers\AlbumController::class, 'edit'])->name('albums.edit');

Route::post('/dashboard/albums/{id}', [\App\Http\Controllers\AlbumController::class, 'update'])->name('albums.update');

Route::get('/dashboard/images', [\App\Http\Controllers\ImageController::class, 'index'])->name('images.index');

Route::get('/dashboard/images/create', [\App\Http\Controllers\ImageController::class, 'create'])->name('images.create');

Route::post('/dashboard/images', [\App\Http\Controllers\ImageController::class, 'store'])->name('images.store');

Route::delete('/dashboard/images/delete/{id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('images.destroy');

Route::get('/dashboard/images/edit/{id}', [\App\Http\Controllers\ImageController::class, 'edit'])->name('images.edit');

Route::post('/dashboard/images/{id}', [\App\Http\Controllers\ImageController::class, 'update'])->name('images.update');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
