<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::get('/user', function (Request $request) {

    return $request->user();
})->middleware('auth:sanctum');
