<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\AvatarController;
use App\Http\Controllers\AWSS3ImageController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\ImageEmailTemplateController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::put('avatar', [AvatarController::class, 'update'])->name('avatar.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::controller(CampaignController::class)->group(function () {
        Route::get('/campaign', 'get_campaign')->name('campaign');
        Route::get('/campaign-create', 'get_campaign_create')->name('get_campaign_create');
        Route::post('/create_campaign', 'store')->name('create_campaign');
    });

    Route::controller(ContractController::class)->group(function () {
        Route::get('/contract', 'index')->name('contract');
        Route::get('/contract-create', 'get_contract_store')->name('get_contract_store');
        Route::get('/segment-contract', 'get_v_segment')->name('get_v_segment');
        Route::get('/segment-all-contract', 'get_v_segment_all_contracts')->name('get_v_segment_all_contracts');

        Route::post('/contract_store', 'store')->name('contract_store');
        Route::post('/contract_update', 'update')->name('contract_update');
    });
    
    Route::controller(EmailTemplateController::class)->group(function () {
        Route::get('/email-template', 'index')->name('email-template');
        Route::post('/email-template-store', 'store')->name('email-template-store');
    });

    Route::controller(ListController::class)->group(function () {
        Route::get('/list', 'get_v_list_all_contracts')->name('get_v_list_all_contracts');
        Route::get('/list-view', 'get_v_create_list_contracts')->name('get_v_create_list_contracts');
        Route::post('/list-store', 'store')->name('list-store');
    });

    Route::controller(ImageEmailTemplateController::class)->group(function () {
        Route::post('/image-base64', 'imageBase64')->name('image-base64');
    });

    Route::controller(AWSS3ImageController::class)->group(function () {
        Route::post('/awss3-store', 'store')->name('awss3-store');
    });
});
