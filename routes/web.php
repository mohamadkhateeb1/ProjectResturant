<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//توجيهات تسجيل المستخدمين الجدد
Route::get('register',[App\Http\Controllers\RegisterController::class,'create']);
Route::post('registerForm',[App\Http\Controllers\RegisterController::class,'store']);
Route::get('registerForm',[App\Http\Controllers\RegisterController::class,'index']);
//توجيهات تسجيل الدخول
Route::get('/login',[App\Http\Controllers\LoginController::class,'create']);
Route::post('/loginForm',[App\Http\Controllers\LoginController::class,'store']);
Route::get('/loginForm',[App\Http\Controllers\LoginController::class,'index']);
Route::get('/index',[App\Http\Controllers\LoginController::class,'index'])->middleware('auth');
