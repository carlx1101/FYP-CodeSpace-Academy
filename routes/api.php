<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\AssistantController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



    // OPENAI Assistant
    Route::post('/question', [AssistantController::class, 'question'])->name('question');
