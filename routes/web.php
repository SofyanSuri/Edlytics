<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('Edlytics');
})->name('home');

Route::get('/learn-more', function () {
    return view('learn-more');
})->name('learn-more');

/*
|--------------------------------------------------------------------------
| Unified Auth Routes (Admin & Student)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('unified.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Student Management
    Route::get('/students/create', [AdminController::class, 'addStudent'])->name('admin.students.create');
    Route::post('/students', [AdminController::class, 'storeStudent'])->name('admin.students.store');
    Route::resource('students', AdminController::class)->except(['show', 'create', 'store']);

    // Data Change Requests
    Route::get('/requests', [AdminController::class, 'manageRequests'])->name('admin.requests');
    Route::put('/requests/{changeRequest}', [AdminController::class, 'updateRequest'])->name('admin.requests.update');

    // Registrations
    Route::get('/registrations', [AdminController::class, 'showRegistrations'])->name('admin.registrations');
    Route::post('/registrations/{registration}/approve', [AdminController::class, 'approveRegistration'])->name('admin.registrations.approve');
    Route::post('/registrations/{registration}/reject', [AdminController::class, 'rejectRegistration'])->name('admin.registrations.reject');
});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::prefix('student')->group(function () {
    // Public Registration
    Route::get('/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('/register', [StudentController::class, 'submitRegistration']);

    // Authenticated Student Routes
    Route::middleware('auth:student')->group(function () {
        Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
        Route::get('/request-form', [StudentController::class, 'showRequestForm'])->name('student.request.form');
        Route::post('/submit-request', [StudentController::class, 'submitRequest'])->name('student.request.submit');
        Route::get('/request-history', [StudentController::class, 'requestHistory'])->name('student.request.history');
    });
});
