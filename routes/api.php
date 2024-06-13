<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevelopmentController;

Route::get('developments', DevelopmentController::class);
