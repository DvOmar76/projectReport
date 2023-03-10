<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [\App\Http\Controllers\DasboardController::class, 'index'])->name('dash');
//Route::get('/createCourse', [\App\Http\Controllers\CourseController::class, 'index'])->name('createCourse');
Route::post('/addStudents', [\App\Http\Controllers\StudentsController::class, 'addStudents'])->name('addStudents');
Route::get('/company/{company}', [\App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/platoon/{platoon}', [\App\Http\Controllers\HomeController::class, 'platoon'])->name('platoon');
Route::get('/group/{group}', [\App\Http\Controllers\HomeController::class, 'group'])->name('group');
Route::get('/reports/{group}', [\App\Http\Controllers\HomeController::class, 'reports'])->name('reports');

