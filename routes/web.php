<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visits',[\App\Http\Controllers\VisitsController::class,'index'])->name('visits');
Route::get("/login",[\App\Http\Controllers\ConnexionController::class,'index'])->name('login');
Route::post("/login",[\App\Http\Controllers\ConnexionController::class,'userLogin'])->name('login.api');
Route::get("/profil",[\App\Http\Controllers\EmployeeController::class,'profil'])->name('profil');
Route::get("/visit",[\App\Http\Controllers\VisitsController::class,'visit'])->name('visit');
Route::view("additionalActivitie",'additionalActivities');
Route::get("/portfeuillePracticien",[\App\Http\Controllers\PracticienConrtroller::class,'list'])->name('portfeuillePracticien');
Route::view("complementaryActivities",'complementaryActivities');
Route::post("complementaryActivities",[\App\Http\Controllers\MedicinesController::class,'add']);




