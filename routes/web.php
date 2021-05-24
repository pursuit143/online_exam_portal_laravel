<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/login',[AdminController::class,'showLoginForm'])->name('admin.login');
    Route::get('/password/forget',[AdminController::class,'forgetForm'])->name('admin.password.forget');
    Route::get('/password/reset',[AdminController::class,'passwordResetForm'])->name('admin.password.reset');
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

});
