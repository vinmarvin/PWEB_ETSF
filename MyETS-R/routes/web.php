<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/',[HomeController::class, 'home']);

route::get('/dashboard',[HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');
;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index']) -> middleware(['auth','admin']);

route::get('view_cat',[AdminController::class,'view_cat']) -> middleware(['auth','admin']);

route::post('add_category',[AdminController::class,'add_category']) -> middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category']) -> middleware(['auth','admin']);

route::get('edit_category/{id}',[AdminController::class,'edit_category']) -> middleware(['auth','admin']);

route::post('change_category/{id}',[AdminController::class,'change_category']) -> middleware(['auth','admin']);

route::get('add_product',[AdminController::class,'add_product']) -> middleware(['auth','admin']);

route::post('upload_product',[AdminController::class,'upload_product']) -> middleware(['auth','admin']);

route::get('view_product',[AdminController::class,'view_product']) -> middleware(['auth','admin']);

route::get('delete_product/{id}',[AdminController::class,'delete_product']) -> middleware(['auth','admin']);

route::get('search_product',[AdminController::class,'search_product']) -> middleware(['auth','admin']);

route::get('products_details/{id}', [HomeController::class,'product_details']);
