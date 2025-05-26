<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/',[Usercontroller::class,'index'])->name('home');
// Route::get('/add',[Usercontroller::class,'create']);
// Route::post('/add',[Usercontroller::class,'store'])->name('add');

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/add', 'create');
    Route::post('/add', 'store')->name('add');
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});





