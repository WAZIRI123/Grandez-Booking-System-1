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
        //? Routes that can be accessed only when logging in
        Route::middleware(['verified'])->group(function () {
            //? Route for dashboard page
            Route::prefix('/dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
                //? Route for admin dashboard page
                Route::prefix('/admin')->namespace('Admin')->middleware('role:admin')->name('admin.')->group(function () {
                    //? Displays data statistics and to set up page about
                    Route::get('/', Index::class)->name('index');
    
                });
    
            });
        });
//? Routes that can be accessed by logging in or without logging in
    Route::get('/', Index::class)->name('index');
    Route::prefix('/packagies')->namespace('Package')->name('packagies.')->group(function () {
        Route::get('/{package:slug}', Index::class)->name('index');
    });
});


require __DIR__.'/auth.php';
