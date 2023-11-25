<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\getdataController;




Route::get('/categories', [getdataController::class, 'categories']);
Route::get('/channels/{id}', [getdataController::class, 'channels']);
