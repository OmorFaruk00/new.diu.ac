<?php

use App\Http\Controllers\DiuAcController;
use Illuminate\Support\Facades\Route;

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

Route::view('/test','test');
 Route::get('/',[DiuAcController::class,'index'])->name('home');
 Route::get('/about-us',[DiuAcController::class,'aboutUs'])->name('about-us');
 Route::get('/why-diu',[DiuAcController::class,'whyDiu'])->name('why-diu');
 Route::get('/vision-mission',[DiuAcController::class,'visionMission'])->name('vision-mission');
 Route::get('/board-of-management',[DiuAcController::class,'boardOfManagement'])->name('board-of-management');
 Route::get('/student-facilities',[DiuAcController::class,'studentFacilities'])->name('student-facilities');
 Route::get('/admission-process',[DiuAcController::class,'admissionProcess'])->name('admission-process');
 Route::get('/program-fee-structure',[DiuAcController::class,'programFeeStructure'])->name('program-fee-structure');
 Route::get('/international-admission',[DiuAcController::class,'internationalAdmission'])->name('international-admission');
 Route::get('/scholarships',[DiuAcController::class,'scholarships'])->name('scholarships');
 Route::get('/admission-help-desk',[DiuAcController::class,'admissionHelpDesk'])->name('admission-help-desk');
 Route::get('/faculty',[DiuAcController::class,'faculty'])->name('faculty');
 Route::get('/workshop-seminars',[DiuAcController::class,'workshopSeminars'])->name('workshop-seminars');
 Route::get('/publications',[DiuAcController::class,'publications'])->name('publications');
 Route::get('/programs/{slug}',[DiuAcController::class,'programs'])->name('programs');