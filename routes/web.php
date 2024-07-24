<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RentcarController;

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

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
Route::get('admin/deleteCategory/{id}',[CategoryController::class,'destroy']);



//CarController
Route::get('admin/allCars',[CarController::class,'index'])->name('allCars');
Route::get('admin/addCar',[CarController::class,'create'])->name('addCar');
Route::post('admin/storeCar',[CarController::class,'store'])->name('storeCar');
Route::get('admin/editCar/{id}',[CarController::class,'edit']);
Route::put('admin/updateCar/{id}',[CarController::class, 'update'])->name('updateCar');
Route::get('admin/deleteCar/{id}',[CarController::class,'destroy']);


//TestimonialController
Route::get('admin/allTestimonials',[TestimonialController::class,'index'])->name('allTest');
Route::get('admin/addTestimonial',[TestimonialController::class,'create'])->name('addTest');
Route::post('admin/storeTestimonial',[TestimonialController::class,'store'])->name('storeTest');
Route::get('admin/editTestimonial/{id}',[TestimonialController::class,'edit']);
Route::put('admin/updateTestimonial/{id}',[TestimonialController::class, 'update'])->name('updateTest');
Route::get('admin/deleteTestimonial/{id}',[TestimonialController::class,'destroy']);


//MessageController
Route::get('admin/allMessages',[MessageController::class,'index'])->name('allMessages');
Route::post('admin/storeMessage',[MessageController::class,'store'])->name('storeMessage');
Route::get('admin/deleteMessage/{id}',[MessageController::class,'destroy']);
Route::get('admin/showMessage/{id}',[MessageController::class,'show'])->name('showMessage');


//RentcarController
Route::get('index/index',[RentcarController::class,'index'])->name('index');
Route::get('index/single/{id}',[RentcarController::class,'single'])->name('single');
Route::get('index/testimonials',[RentcarController::class,'test'])->name('testimonials');
Route::get('index/blog',[RentcarController::class,'blog'])->name('blog');
Route::get('index/listing',[RentcarController::class,'listing'])->name('listing');


Route::view('index/about','index.about')->name('about');
Route::view('index/contact','index.contact')->name('contact');


Route::get('sendemial',[MessageController::class,'send_mail']);