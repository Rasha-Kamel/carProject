<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
//UserController
Route::get('admin/allusers',[UserController::class,'index'])->name('allusers');
Route::get('admin/addUser',[UserController::class,'create'])->name('addusers');
Route::post('admin/storeUser',[UserController::class,'store'])->name('storeUser');
Route::get('admin/editUser/{id}',[UserController::class,'edit']);
Route::put('admin/updateUser/{id}', [UserController::class, 'update'])->name('updateUser');



//CategoryController
Route::get('admin/allCartegories',[CategoryController::class,'index'])->name('allCartegories');
Route::get('admin/addCategory',[CategoryController::class,'create'])->name('addCategory');
Route::post('admin/storeCategory',[CategoryController::class,'store'])->name('storeCategory');
Route::get('admin/editCategory/{id}',[CategoryController::class,'edit']);
Route::put('admin/updateCategory/{id}',[CategoryController::class, 'update'])->name('updateCategory');






Route::view('admin/allCars','admin.cars')->name('allCars');
Route::view('admin/addCar','admin.addCar')->name('addCar');
Route::view('admin/editCar','admin.editCar')->name('editCar');






Route::view('admin/allTest','admin.testimonials')->name('allTest');
Route::view('admin/addTest','admin.addTestimonials')->name('addTest');
Route::view('admin/editTest','admin.editTestimonials')->name('editTest');

Route::view('admin/allMessages','admin.messages')->name('allMessages');
Route::view('admin/showMessage','admin.showMessage')->name('showMessage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
