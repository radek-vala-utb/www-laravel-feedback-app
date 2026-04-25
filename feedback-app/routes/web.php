<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedbackController::class, 'create'])->name('feedback.form');
Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/{feedbackId}', [FeedbackController::class, 'show'])->name('feedback.show');
