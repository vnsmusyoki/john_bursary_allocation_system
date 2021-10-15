<?php

use App\Http\Controllers\admin\AdminCalendarController;
use App\Http\Controllers\admin\ContentCOntroller;
use App\Http\Controllers\admin\StudentsController;
use App\Http\Controllers\clerk\FinanceController;
use App\Http\Controllers\student\StudentAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logoutchecked', function (Request $request) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/login')->with('passwordreset', 'Congrats! Your account is now set.You can now login');
    $request->session()->flush();
    Auth::logout();
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [ContentCOntroller::class, 'index'])->name('admin');
Route::get('admin/fetch-all-events', [AdminCalendarController::class, 'dashboardfetchevents']);
Route::prefix('admin')->group(function () {
    Route::resource('managestudents', StudentsController::class);
    Route::get('full-calendar', [AdminCalendarController::class, 'index']);
    Route::get('all-events', [AdminCalendarController::class, 'allevents']);
    Route::get('add-event', [AdminCalendarController::class, 'addevent']);
    Route::get('add-event', [AdminCalendarController::class, 'addevent']);
    Route::post('add_event', [AdminCalendarController::class, 'uploadaddevent']);
    Route::get('student-admission/{student}/{slag}', [StudentsController::class, 'uploadfather']);
    Route::get('upload-mother/{student}/{slag}', [StudentsController::class, 'uploadmother']);
    Route::get('upload-guardian/{student}/{slag}', [StudentsController::class, 'uploadguardian']);
});




// STUDENT ACCESS LINKS
Route::get('student/dashboard', [StudentAccountController::class, 'index'])->name('student');

Route::prefix('student')->group(function () {
    Route::get('feestatement', [StudentAccountController::class, 'feestatement']);
    Route::get('account-password', [StudentAccountController::class, 'accountpassword']);
});


// CLERK LINKS
Route::get('finance/dashboard', [FinanceController::class, 'index'])->name('clerk');
