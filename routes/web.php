<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/students', [StudentsController::class,'index'])->name('studentsindex');

Route::get('/show/{id}', [StudentsController::class,'show'])->name('studentshow');

Route::get('/create', [StudentsController::class,'create'])->name('studentcreate');

Route::post('/store', [StudentsController::class,'store'])->name('studentstore');

Route::get('/edit/{id}', [StudentsController::class,'edit'])->name('studentedit');

Route::post('/update/{id}', [StudentsController::class,'update'])->name('studentupdate');

Route::get('/delete/{id}', [StudentsController::class,'destroy'])->name('studentdelete');

Route::post('/search', [StudentsController::class,'serch'])->name('studentserach');
