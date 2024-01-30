<?php

use App\Http\Controllers\FellowshipController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/'], function () {
    Route::get('/', [FellowshipController::class, 'index'])->name('index');
    Route::get('result', [FellowshipController::class, 'show'])->name('result');
    Route::get('create', [FellowshipController::class, 'create'])->name('create');
    Route::post('create', [FellowshipController::class, 'store'])->name('store');
});
