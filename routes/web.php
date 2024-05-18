<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\addcategoriesController;
use App\Http\Controllers\web\addchannelController;


Route::get('/', [HomePageController::class, 'index'])->name('homePage');
Route::get('/download-apk', function () {
    $filePath = public_path('HeroTV.apk');
    return response()->download($filePath, 'HeroTV.apk');
})->name('download.apk');

Route::group(['prefix' => 'dashboard',], function () {
    Route::get('/', [addcategoriesController::class, 'index'])->name('home');
    Route::post('/post', [addcategoriesController::class, 'create'])->name('createCategories');
    Route::get('/edit/{id}', [addcategoriesController::class, 'show'])->name('showCategories');
    Route::post('/update/{id}', [addcategoriesController::class, 'update'])->name('updateCategories');
    Route::post('/delete/{id}', [addcategoriesController::class, 'destroy'])->name('destroyCategories');

    Route::get('/channels/{id}', [addchannelController::class, 'index'])->name('addchannels');
    Route::post('/create/channels', [addchannelController::class, 'create'])->name('createChannels');
    Route::get('/channel/only/{id}', [addchannelController::class, 'show'])->name('channel');
    Route::post('/update/channels/{id}', [addchannelController::class, 'update'])->name('updateChannels');
    Route::post('/delete/channels/{id}', [addchannelController::class, 'destroy'])->name('deleteChannels');
});

