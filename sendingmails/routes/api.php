<?php

use App\Http\Controllers\EmailTemplateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(EmailTemplateController::class)->group(function () {
    Route::get('/email-template-option', 'get_v_email_template')->name('email-template-option');
    Route::get('/email-template-raw', 'get_v_email_template_raw')->name('email-template-raw');
    Route::post('/email-template-store', 'store')->name('email-template-store');
})->middleware('auth:sanctum');
