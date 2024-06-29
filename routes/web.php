<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::post('/signin', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['AuthAdmin']], function () {

    Route::get('/admin', [AdminController::class, 'berandaadmin']);
    Route::get('/listpsikolog', [AdminController::class, 'psikolog']);
    Route::post('/insertpsikolog', [AdminController::class, 'insertpsikolog']);
    Route::post('/updatepsikolog', [AdminController::class, 'updatepsikolog']);
    Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

});

Route::group(['middleware' => ['AuthUser']], function () {

    Route::get('/user', [UserController::class, 'berandauser']);
    
});


Route::group(['middleware' => ['AuthPsikolog']], function () {

    Route::get('/psikolog', [PsikologController::class, 'berandapsikolog']);

});