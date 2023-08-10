<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\aController;
 
Route::get('/', [aController::class, 'b']);

Route::get('/about', [aController::class, 'about']);

Route::get('/portfolio', [aController::class, 'portfolio']);

Route::get('/team', [aController::class, 'team']);
?>
