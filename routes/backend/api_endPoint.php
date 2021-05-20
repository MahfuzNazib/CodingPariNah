<?php

use App\Http\Controllers\Backend\ApiEndPointController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api_endPoint'], function(){
    Route::get('/', [ApiEndPointController::class, 'index'])->name('apiEndPointIndex');
});

?>