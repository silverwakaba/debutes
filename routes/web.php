<?php

use Illuminate\Support\Facades\Route;

// Index Web Routes
Route::group(['prefix' => '/'], function() {
    Route::get('/', App\Http\Livewire\FrontLivewire::class)->name('front.index');
});