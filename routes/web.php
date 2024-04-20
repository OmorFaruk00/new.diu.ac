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
 Route::get('/semester-abroad-program',[DiuAcController::class,'semesterAbroadProgram'])->name('semester-abroad-program');
 Route::get('/internship-abroad-program',[DiuAcController::class,'internshipAbroadProgram'])->name('internship-abroad-program');
 Route::get('/study-tour',[DiuAcController::class,'studyTour'])->name('study-tour');
 Route::get('/faculty-exchange-program',[DiuAcController::class,'facultyExchangeProgram'])->name('faculty-exchange-program');
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
 Route::get('/convocation',[DiuAcController::class,'convocation'])->name('convocation');
 Route::get('/publications',[DiuAcController::class,'publications'])->name('publications');
 Route::get('/notice-board',[DiuAcController::class,'noticeBoard'])->name('notice-board');
 Route::get('/notice-details/{slug}',[DiuAcController::class,'noticeDetails'])->name('notice-details');


 Route::get('/programs/{slug}',[DiuAcController::class,'programs'])->name('programs');
 Route::get('/campus-life',[DiuAcController::class,'campusLife'])->name('campus-life');
 Route::get('/student-faculty-achievements',[DiuAcController::class,'studentFacultyAchievements'])->name('student-faculty-achievements');
 Route::get('/alumni',[DiuAcController::class,'alumni'])->name('alumni');
 Route::get('/institute',[DiuAcController::class,'institute'])->name('institute');
 Route::get('/cell',[DiuAcController::class,'cell'])->name('cell');
 Route::get('/centre-of-excellence',[DiuAcController::class,'centreOfExcellence'])->name('centre-of-excellence');
 Route::get('/business-analytical-lab',[DiuAcController::class,'businessAnalyticalLab'])->name('business-analytical-lab');
 Route::get('/newsletter',[DiuAcController::class,'newsletter'])->name('newsletter');
 Route::get('/club',[DiuAcController::class,'hobbyClub'])->name('club');
 Route::get('/entrepreneurship-cell',[DiuAcController::class,'entrepreneurshipCell'])->name('entrepreneurship-cell');
 Route::get('/sports',[DiuAcController::class,'sports'])->name('sports');
 Route::get('/arka',[DiuAcController::class,'arka'])->name('arka');

 Route::get('/placement-process',[DiuAcController::class,'placementProcess'])->name('placement-process');
 Route::get('/recruiters',[DiuAcController::class,'recruiters'])->name('recruiters');
 Route::get('/pre-placement-training',[DiuAcController::class,'prePlacementTraining'])->name('pre-placement-training');
 Route::get('/student-placements',[DiuAcController::class,'studentPlacements'])->name('student-placements');
 Route::get('/internship',[DiuAcController::class,'internship'])->name('internship');

 Route::get('/mou',[DiuAcController::class,'mou'])->name('mou');
 Route::get('/international-conference',[DiuAcController::class,'internationalConference'])->name('international-conference');
 Route::get('/contact',[DiuAcController::class,'contact'])->name('contact');
 Route::get('/certificate-verification',[DiuAcController::class,'certificateVerification'])->name('certificate-verification');
