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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index']);
Route::post('/create-account', [PagesController::class, 'createaccount']);

Route::get('cbk/dashboard', [CBKAccountController::class, 'index'])->name('admin');
Route::prefix('cbk')->group(function () {
    Route::get('add-county-subcounty', [CBKAccountController::class, 'addcounty']);
    Route::get('add-school', [CBKAccountController::class, 'addschool']);
    Route::get('all-county-subcounty', [CBKAccountController::class, 'allcounties']);
    Route::post('store-constituency', [CBKAccountController::class, 'storeconstituency']);
    Route::post('store-school', [CBKAccountController::class, 'storeschool']);
    Route::get('all-schools', [CBKAccountController::class, 'allschools']);
    Route::get('avatar', [CBKAccountController::class, 'avatar']);
    Route::post('update-password', [CBKAccountController::class, 'updatepassword']);
    Route::post('update-email', [CBKAccountController::class, 'updateemail']);
    Route::post('update-avatar', [CBKAccountController::class, 'updateavatar']);
    Route::get('account-security', [CBKAccountController::class, 'accountsecurity']);
    Route::get('county-allocation/{id}', [CBKAccountController::class, 'countyallocation']);
    Route::patch('edit-constituency/{id}', [CBKAccountController::class, 'editconstituency']);
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
    Route::get('bursaries-allocated', [SchoolAccountController::class, 'allocatedbursaries']);
    Route::get('account-security', [SchoolAccountController::class, 'accountsecurity']);
    Route::get('application-details/{id}', [SchoolAccountController::class, 'applicationdetails']);
    Route::patch('school-update-application/{id}', [SchoolAccountController::class, 'schoolupdateapplication']);
    Route::post('update-password', [SchoolAccountController::class, 'updatepassword']);
    Route::post('update-email', [SchoolAccountController::class, 'updateemail']);
    Route::post('update-avatar', [SchoolAccountController::class, 'updateavatar']);
});



Route::get('cdf/dashboard', [CdfAccountController::class, 'index'])->name('cdf');
Route::prefix('cdf')->group(function () {
    Route::get('application-details/{id}', [CdfAccountController::class, 'applicationdetails']);
    Route::get('computer-points/{id}', [CdfAccountController::class, 'computepoints']);
    Route::get('bursary-points-allocated', [CdfAccountController::class, 'allocatedpoints']);
    Route::get('amount-allocations', [CdfAccountController::class, 'amountsallocated']);
    Route::get('compute-allocations', [CdfAccountController::class, 'awardamount']);
    Route::get('account-security', [CdfAccountController::class, 'accountsecurity']);
    Route::post('update-password', [CdfAccountController::class, 'updatepassword']);
    Route::post('update-email', [CdfAccountController::class, 'updateemail']);
    Route::post('update-avatar', [CdfAccountController::class, 'updateavatar']);
});
// dd
