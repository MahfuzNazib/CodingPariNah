<?php

use App\Http\Controllers\Backend\KhojController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'khoj'], function(){
    Route::get('/', [KhojController::class, 'khoj'])->name('khoj.search');
	Route::post('/', [KhojController::class, 'add'])->name('khoj.add');
});

?>