<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('student', StudentController::class);
Route::get('search',[StudentController::class, 'search']);
Route::get('student/value/{nim}',[StudentController::class, 'value'])
->name('student.value');
Route::get('student/print_khs/{nim}',[StudentController::class, 'print_khs'])->name('print_khs');

Route::get('/', function () {
    return view('welcome');
});
