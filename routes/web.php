<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ReviewController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::get('/profile',[AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/profile/store',[AdminController::class,'profileStore'])->name('profile.store');
    Route::post('/admin/password/update', [AdminController::class, 'adminPasswordUpdate'])->name('admin.password.update');
});

Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::get('/verify', [AdminController::class, 'showVerification'])->name('custom.verification.form');
Route::get('/verify', [AdminController::class, 'verificationVerify'])->name('custom.verification.verify');

Route::middleware('auth')->group(function()
{
    Route::controller(ReviewController::class)->group(function()
    {
        Route::get('/all/review', 'allReview')->name('all.review');
        Route::get('/add/review', 'addReview')->name('add.review');
        Route::post('/store/review', 'storeReview')->name('store.review');
    });
});