<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkerController;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('markers', MarkerController::class);

// Route::get('/scan/{code}', [MarkerController::class, 'scan'])->name('markers.scan');
// Route::middleware(['cors'])->group(function () {
//     Route::get('/storage/{folder}/{file}', function ($folder, $file) {
//         $path = storage_path("app/public/{$folder}/{$file}");
//         return response()->file($path, [
//             'Access-Control-Allow-Origin' => '*',
//             'Access-Control-Allow-Methods' => 'GET',
//         ]);
//     });
// })->where('file', '.*');
Route::get('/ar/scan', [MarkerController::class, 'showAR']);
// Route::post('/markers/upload-mind', [MarkerController::class, 'uploadMindFile'])->name('markers.upload-mind');
Route::prefix('markers')->group(function () {
    // ... routes existing lainnya ...

    Route::get('/upload-mind', [MarkerController::class, 'showMindUploadForm'])->name('markers.upload-mind-form');
    Route::post('/upload-mind', [MarkerController::class, 'uploadMindFile'])->name('markers.upload-mind');
});
Route::resource('markers', MarkerController::class);
