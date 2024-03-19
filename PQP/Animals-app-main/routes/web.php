<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/teste', function () {
    return "teste";
});

Route::get('/animais', [AnimalController::class, 'index']);
