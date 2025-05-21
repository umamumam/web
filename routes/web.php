<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkerController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('markers', MarkerController::class);

Route::get('/scan/{code}', [MarkerController::class, 'scan'])->name('markers.scan');
