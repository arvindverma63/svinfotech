<?php

use App\Http\Controllers\AppliedCourseController;
use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Public routes
Route::post('/register', [UserController::class, 'register'])->name('register'); // Register user
Route::post('/login', [UserController::class, 'login'])->name('signIn'); // Login user
Route::post('/password/email', [UserController::class, 'sendResetLink']); // Send password reset link
 // Reset password
Route::get('/admin', [PageController::class, 'signIn'])->name('login');
Route::get('/signUp', [PageController::class, 'signUp'])->name('signUp');
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/company',[PageController::class,'company'])->name('company');
Route::get('/services',[PageController::class,'services'])->name('services');
Route::get('/solutions',[PageController::class,'solutions'])->name('solutions');
Route::get('/industries',[PageController::class,'industries'])->name('industries');
Route::get('/career',[PageController::class,'career'])->name('career');
Route::get('/apply/job/{id}',[PageController::class,'applyJob'])->name('applyJob');
Route::get('/contactPage',[PageController::class,'contactPage'])->name('contact.page');

Route::post('/applied/job', [AppliedCourseController::class, 'apply'])->name('applied.job');
Route::post('/contact/form',[EnquiriesController::class,'postEnq'])->name('contact.form');
Route::get('/search-job', [CourseController::class, 'searchJob']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::delete('/users/{id}', [UserController::class, 'destroy']); // Delete user
    Route::put('/users/{id}', [UserController::class, 'update']); // Update user
    Route::get('/logout', [UserController::class, 'logout'])->name('logout'); // Logout user

    Route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');
    Route::get('/report', [PageController::class, 'report'])->name('report');
    Route::get('/jobs', [PageController::class, 'job'])->name('admin.jobs');
    Route::get('/job-upload',[PageController::class,'jobForm'])->name('jobForm');
    Route::post('/admin/jobs', [CourseController::class, 'postJob'])->name('admin.jobs.store');
    Route::delete('/jobs/{id}',[CourseController::class,'deleteJob'])->name('admin.delete.job');
    Route::put('/jobs/{id}/toggleStatus',[CourseController::class,'updateStatus'])->name('edit.status');
    Route::get('/job/show/{id}', [PageController::class, 'jobView'])->name('job.show');
    Route::get('/applied/candidate/{id}',[AppliedCourseController::class,'appliedGrid'])->name('applied.grid');
    Route::get('/candidate/profile/{id}',[PageController::class,'candidateProfile'])->name('candidate.profile');
    Route::get('/settings',[PageController::class,'settings'])->name('settings');
    Route::post('/password/reset', [UserController::class, 'resetPassword'])->name('password.reset');
    Route::get('/read/mail/{id}',[EnquiriesController::class,'readMail'])->name('readMail');
    Route::get('/getStats',[CourseController::class,'getStats'])->name('stats');
    Route::get('/edit/jobs/{id}',[PageController::class,'editJob'])->name('admin.edit');
    Route::put('/job/edit/{id}',[CourseController::class,'editJob'])->name('admin.edit.job');
    Route::get('/delete/mail/{id}',[EnquiriesController::class,'deleteMail'])->name('delete.mail');
});


Route::get('/company#about-tardus',[PageController::class,'aboutTradus'])->name('aboutTradus');
Route::get('/company#why-choose-us',[PageController::class,'whychooseUs'])->name('whyChooseUs');
Route::get('/company#our-methodology',[PageController::class,'methodology'])->name('methodology');
