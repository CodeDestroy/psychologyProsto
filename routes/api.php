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
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {


    /* Route::post('api/register', [RegisteredUserController::class, 'store']);
    Route::post('api/login', [AuthenticatedSessionController::class, 'store']); */
});

Route::middleware('auth:sanctum')->group(function () {
    /* Route::post('api/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::get('api/user', function (Request $request) {
        return response()->json($request->user());
    }); */
});

