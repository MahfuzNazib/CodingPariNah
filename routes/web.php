<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


// Login Route 
Route::get('/', [LoginController::class, 'login_show'])->name('login.show');
Route::post('/do_login', [LoginController::class, 'do_login'])->name('do.login');

//logout route start
Route::post('/do-logout', [LogoutController::class, 'do_logout'])->name('do.logout');

// Registration Route
Route::any('/registration', [RegistrationController::class, 'registration'])->name('registration');


Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	// Segment-2 Route
	require_once('backend/khoj.php');
	// Segment-3 Route
	require_once('backend/api_endPoint.php');
});
