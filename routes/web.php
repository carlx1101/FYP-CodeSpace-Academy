<?php

use App\Http\Livewire\Sections;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Tutor\EventController;

use App\Http\Controllers\Student\CartController;
use App\Http\Controllers\Student\NoteController;
use App\Http\Controllers\Tutor\CourseController;
use App\Http\Controllers\Tutor\LessonController;
use App\Http\Controllers\Tutor\SectionController;
use App\Http\Controllers\Student\BillingController;
use App\Http\Controllers\Student\PaymentController;
use App\Http\Controllers\Student\AssistantController;
use App\Http\Controllers\Student\EnrollmentController;
use App\Http\Controllers\Student\CertificateController;
use App\Http\Controllers\Tutor\StudentProgressController;
use App\Http\Controllers\Student\CourseController as StudentCourseController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/courses/{id}', [PageController::class, 'course'])->name('course');
Route::get('/user/public-preview/{encryptedId}', [ProfileController::class, 'showPublicPreview'])->name('user.public_preview');


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

    // Manage Cart
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');

    // Checkout
    Route::post('checkout', [PaymentController::class, 'checkout'])->name('cart.checkout');
    Route::get('success', [PaymentController::class, 'success'])->name('checkout.success');
    Route::get('cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');

    // My Courses
    Route::get('/my-courses', [StudentCourseController::class, 'myCourses'])->name('my.courses');

    // Learn Course
    Route::get('/{courseTitle}/learn/{lessonId?}', [StudentCourseController::class, 'learn'])->name('student.learn');

    // Notes
    Route::resource('notes', NoteController::class);

    // Profile
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

    // Billing

    Route::get('/billings', [BillingController::class, 'index'])->name('billings.index');
    Route::get('/billings/{order}', [BillingController::class, 'show'])->name('billings.show');

    // OpenAI Assistant
    Route::get('/assistant/{lessonId}', [AssistantController::class, 'assistant'])->name('chatbot.assistant');

    // Certificate
    Route::get('/certificate/download/{course}', [CertificateController::class, 'download'])->name('certificate.download');



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
    Route::put('courses/{courseId}/sections/{sectionId}/edit', [SectionController::class, 'update'])->name('sections.edit');

    // Manage Lesson
    Route::post('sections/{section}/lessons', [LessonController::class, 'store'])->name('lessons.store');
    Route::delete('sections/{section}/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

    // Enroll Student
    Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'enroll'])->name('courses.enroll');
    Route::get('/courses/{course}/students', [CourseController::class, 'showStudents'])->name('courses.students');

    // Show Student Progress

    Route::get('/student/{studentId}/course/{courseId}/progress', [StudentProgressController::class, 'show'])->name('student.progress');

    // Events
    Route::get('events', [EventController::class, 'index'])->name('events.index');

    // Manage Posts
    Route::resource('posts', PostController::class);


});

Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});



