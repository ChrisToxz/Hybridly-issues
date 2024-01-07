<?php

use Illuminate\Support\Facades\Route;


/**
 * Subdomain
 */
Route::domain('sub.' . config('app.url'))->group(function () {

    // `NS_ERROR_DOM_BAD_URI` error
    Route::get('/table', function () {
        return hybridly('table', [
            'users' => \App\Tables\UserTable::make()
        ]);
    });

    // Prints http://localhost/route but http://sub.localhost/route is expected
    Route::get('/route', function () {
        return hybridly('route', [
            'users' => \App\Tables\UserTable::make()
        ]);
    })->name('testname');
});


/**
 * Main domain (Working examples)
 */

// Working actions
Route::get('/table', function () {
    return hybridly('table');
});

// Prints http://localhost/route as expected
Route::get('/route', function () {
    return hybridly('route');
})->name('testname');




