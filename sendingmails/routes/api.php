<?php

use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get-csrf-token', function (Request $request) {
    return csrf_token();
})->middleware('auth:sanctum');

Route::controller(EmailTemplateController::class)->group(function () {
    Route::post('/email-template-store', 'store')->name('email-template-store');
})->middleware('auth:sanctum');



