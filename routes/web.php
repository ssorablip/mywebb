<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exhibitionController;
use App\Http\Controllers\ArtworkController;
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
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/a', function(){
    return view('exhibition');
});

use App\Http\Controllers\bookController;
Route::get('book', [bookController::class, "index"])->name("book.idx");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/exhibition', [exhibitionController::class, "index"]);

Route::get('/artworks',[ArtworkController::class, "index"])->name("artworks");

Route::post('/artworks/insert',[ArtworkController::class, "insert"])->name("artworks.insert");

Route::get('/artworks/{id}/edit',[ArtworkController::class, "edit"])->name("artworks.edit");

Route::post('/artworks/{id}/update',[ArtworkController::class, "update"])->name("artworks.update");


// dfdajflfja;
// affdsfgit 