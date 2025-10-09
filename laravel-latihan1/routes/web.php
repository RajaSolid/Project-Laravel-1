<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class]);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [ContactController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/student', [StudentsController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);