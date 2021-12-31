<?php

use App\Http\Controllers\cbk\CBKAccountController;
use App\Http\Controllers\Cdf\CdfAccountController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\school\SchoolAccountController;
use App\Http\Controllers\student\StudentAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/logoutchecked', function (Request $request) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/login')->with('passwordreset', 'Congrats! Your account is now set.You can now login');
    $request->session()->flush();
    Auth::logout();
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index']);

Route::get('cbk/dashboard', [CBKAccountController::class, 'index'])->name('admin');
Route::prefix('cbk')->group(function () {
});




// STUDENT ACCESS LINKS
Route::get('student/dashboard', [StudentAccountController::class, 'index'])->name('student');

Route::prefix('student')->group(function () {
    Route::get('feestatement', [StudentAccountController::class, 'feestatement']);
    Route::get('account-password', [StudentAccountController::class, 'accountpassword']);
    Route::get('complete-profile', [StudentAccountController::class, 'completeprofile']);
    Route::post('finish-account', [StudentAccountController::class, 'storeprofile']);
    Route::get('apply-bursary', [StudentAccountController::class, 'applybursary']);
    Route::get('bursary-applications', [StudentAccountController::class, 'bursaryapplications']);
    Route::get('application-details/{app}', [StudentAccountController::class, 'appdetails']);
    Route::get('allocated-bursary-applications', [StudentAccountController::class, 'allocatedbursaryapplications']);
    Route::get('denied-bursary-applications', [StudentAccountController::class, 'deniedbursaryapplications']);
    Route::get('avatar', [StudentAccountController::class, 'avatar']);
    Route::post('update-password', [StudentAccountController::class, 'updatepassword']);
    Route::post('update-email', [StudentAccountController::class, 'updateemail']);
    Route::post('update-avatar', [StudentAccountController::class, 'updateavatar']);
});


// CLERK LINKS
Route::get('school/dashboard', [SchoolAccountController::class, 'index'])->name('school');
Route::prefix('school')->group(function () {
    Route::get('school-comments', [SchoolAccountController::class, 'schoolcomments']);
    Route::get('bursary-applications', [SchoolAccountController::class, 'bursaryapplications']);
    Route::get('submited-applications', [SchoolAccountController::class, 'submitedbursaryapplications']);
    Route::get('denied-applications', [SchoolAccountController::class, 'deniedbursaryapplications']);
    Route::get('account-security', [SchoolAccountController::class, 'accountsecurity']);
    Route::get('application-details/{id}', [SchoolAccountController::class, 'applicationdetails']);
    Route::patch('school-update-application/{id}', [SchoolAccountController::class, 'schoolupdateapplication']);
    Route::post('update-password', [SchoolAccountController::class, 'updatepassword']);
    Route::post('update-email', [SchoolAccountController::class, 'updateemail']);
    Route::post('update-avatar', [SchoolAccountController::class, 'updateavatar']);
});



Route::get('cdf/dashboard', [CdfAccountController::class, 'index'])->name('cdf');
Route::prefix('cdf')->group(function() {
    Route::get('application-details/{id}', [CdfAccountController::class, 'applicationdetails']);
});
// dd
