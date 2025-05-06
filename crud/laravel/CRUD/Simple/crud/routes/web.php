<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers ;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Route::post('/insertrecord', [YourController::class, 'insertrecord'])->name('insertrecord');


// Route to display the index page
Route::get('/', [UserController::class, 'index'])->name('index');

// Route to handle form submission and insert user data
Route::post('/add', [UserController::class, 'insert'])->name('insert');
