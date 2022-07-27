<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------P---------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('App\Http\Livewire')->group(function () {

    Route::get('/', Index::class)->name('index');
    Route::prefix('/packagies')->namespace('Package')->name('packagies.')->group(function () {
        Route::get('/{package:slug}', Index::class)->name('index');
    });
});


require __DIR__.'/auth.php';
