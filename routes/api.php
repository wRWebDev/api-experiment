<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevelopmentController;

Route::name('api.')->group(function () {

    Route::get('developments', DevelopmentController::class)->name('developments');

});
