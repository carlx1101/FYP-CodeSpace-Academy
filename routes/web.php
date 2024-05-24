<?php

use App\Http\Livewire\Sections;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Tutor\CourseController;
use App\Http\Controllers\Tutor\LessonController;
use App\Http\Controllers\Tutor\SectionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth', 'user-access:student'])->prefix('student')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'studentDashboard'])->name('student.dashboard');
});

Route::middleware(['auth', 'user-access:tutor'])->prefix('tutor')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'tutorDashboard'])->name('tutor.dashboard');

    // Manage Courses
    Route::resource('courses', CourseController::class);
    Route::post('/courses/{course}/toggle-publishing', [CourseController::class, 'togglePublishingStatus'])->name('courses.togglePublishingStatus');

    // Manage sections
    Route::get('courses/{courseId}/sections', [SectionController::class, 'index'])->name('sections.index');
    Route::post('courses/{courseId}/sections', [SectionController::class, 'store'])->name('sections.store');
    Route::delete('courses/{courseId}/sections/{sectionId}', [SectionController::class, 'destroy'])->name('sections.destroy');

    // Manage Lesson
    Route::post('sections/{section}/lessons', [LessonController::class, 'store'])->name('lessons.store');
    Route::delete('sections/{section}/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');



});

Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});

