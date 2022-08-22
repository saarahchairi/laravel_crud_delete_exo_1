<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FemmesController;
use App\Http\Controllers\HommesController;
use App\Http\Controllers\MembresController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/membres', [MembresController::class,"membres"])->name('membres');
Route::post('/membres/create', [MembresController::class,"store"]);
Route::delete('/{id}/delete', [MembresController::class, "destroy"]);

Route::get('/femmes', [FemmesController::class,"femmes"])->name('femmes');
Route::delete('/{id}/delete', [FemmesController::class, "destroy"]);

Route::get('/hommes', [HommesController::class,"hommes"])->name('hommes');
Route::delete('/{id}/delete', [HommesController::class, "destroy"]);

