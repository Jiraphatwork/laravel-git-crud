<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

Route::get('/', function () {
    return view('welcome');   
});




Route::get('blog',[Admincontroller::class,'index'])->name('blog');
Route::get('about',[AdminController::class, 'about'])->name('about');
Route::get('create',[AdminController::class, 'create']);
Route::post('insert',[AdminController::class,'insert']);
Route::delete('delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('change/{id}',[AdminController::class,'change'])->name('change');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('update/{id}',[AdminController::class,'update'])->name('update');
Route::get('viewjob/{id}',[AdminController::class,'viewjob'])->name('viewjob');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
