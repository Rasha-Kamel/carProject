<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes
Route::view('admin/allusers','admin.users')->name('allusers');
Route::view('admin/addUser','admin.addUser')->name('addusers');
Route::view('admin/editUser','admin.editUser')->name('editusers');

Route::view('admin/allCars','admin.cars')->name('allCars');
Route::view('admin/addCar','admin.addCar')->name('addCar');
Route::view('admin/editCar','admin.editCar')->name('editCar');

Route::view('admin/allCartegories','admin.categories')->name('allCartegories');
Route::view('admin/addCategory','admin.addCategory')->name('addCategory');
Route::view('admin/editCategory','admin.editCategory')->name('editCategory');

Route::view('admin/allTest','admin.testimonials')->name('allTest');
Route::view('admin/addTest','admin.addTestimonials')->name('addTest');
Route::view('admin/editTest','admin.editTestimonials')->name('editTest');

Route::view('admin/allMessages','admin.messages')->name('allMessages');
Route::view('admin/showMessage','admin.showMessage')->name('showMessage');