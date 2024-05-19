<?php

use App\Http\Controllers\DiuController;
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

Route::get('/test',[DiuController::class,'test'])->name('test');
 Route::get('/about',[DiuController::class,'about'])->name('about');
 Route::get('/',[DiuController::class,'index'])->name('home');
 Route::get('/about-us',[DiuController::class,'aboutUs'])->name('about-us');
 Route::get('/why-diu',[DiuController::class,'whyDiu'])->name('why-diu');
 Route::get('/vision-mission',[DiuController::class,'visionMission'])->name('vision-mission');
 Route::get('/board-of-management',[DiuController::class,'boardOfManagement'])->name('board-of-management');
 Route::get('/admission-process',[DiuController::class,'admissionProcess'])->name('admission-process');
 Route::get('/program-fee-structure',[DiuController::class,'programFeeStructure'])->name('program-fee-structure');
 Route::get('/international-admission',[DiuController::class,'internationalAdmission'])->name('international-admission');
 Route::get('/scholarships',[DiuController::class,'scholarships'])->name('scholarships');
 Route::get('/admission-help-desk',[DiuController::class,'admissionHelpDesk'])->name('admission-help-desk');

 Route::get('/future-student',[DiuController::class,'futureStudent'])->name('future-student');
 Route::get('/faculty',[DiuController::class,'faculty'])->name('faculty');
 Route::get('/faculty/{slug}',[DiuController::class,'facultyDetails'])->name('faculty-details');
 Route::get('/convocation',[DiuController::class,'convocation'])->name('convocation');
 Route::get('/publications',[DiuController::class,'publications'])->name('publications');
 Route::get('/news',[DiuController::class,'news'])->name('news');
 Route::get('/events',[DiuController::class,'events'])->name('events');
 Route::get('/notice-details/{slug}',[DiuController::class,'noticeDetails'])->name('notice-details');

 Route::get('/journals', [DiuController::class, 'journals'])->name('journals');
 Route::get('/journals/volume/{id}', [DiuController::class, 'journalsVol12'])->name('vol12');
    Route::get('/journal_details/{id}', [DiuController::class, 'journalDetails'])->name('journal_details');


 Route::get('/programs/{slug}',[DiuController::class,'programs'])->name('programs'); 
 Route::get('/institute',[DiuController::class,'institute'])->name('institute');
 Route::get('/cell',[DiuController::class,'cell'])->name('cell');
 


 Route::get('/contact',[DiuController::class,'contact'])->name('contact');
 Route::get('/certificate-verification',[DiuController::class,'certificateVerification'])->name('certificate-verification');


 Route::group(['prefix' => 'campus-life'], function () {
    Route::get('/libray',[DiuController::class,'library'])->name('library');
    Route::get('/club',[DiuController::class,'club'])->name('club');
    Route::get('/lab',[DiuController::class,'lab'])->name('lab');
    Route::get('/alumni',[DiuController::class,'alumni'])->name('alumni');
    Route::get('/academic-session',[DiuController::class,'academicSession'])->name('academic-session');
    Route::get('/health-service',[DiuController::class,'healthService'])->name('health-service');
    Route::get('/accommodation',[DiuController::class,'accommodation'])->name('accommodation');
    Route::get('/student-welfare',[DiuController::class,'studentWelfare'])->name('student-welfare');
    Route::get('career-counseling',[DiuController::class,'careerCounseling'])->name('career-counseling');
    Route::get('course-counseling',[DiuController::class,'courseCounseling'])->name('course-counseling');
    Route::get('internet',[DiuController::class,'internet'])->name('internet');
    Route::get('canteen-common-rooms',[DiuController::class,'canteen'])->name('canteen');
});


Route::group(['prefix' => 'cell'], function () {
    Route::get('/iqac',[DiuController::class,'iqac'])->name('iqac');
    Route::get('/tcrc',[DiuController::class,'tcrc'])->name('tcrc');
    Route::get('/sbac',[DiuController::class,'sbac'])->name('sbac');
    Route::get('/cecd',[DiuController::class,'cecd'])->name('cecd');
});

Route::group(['prefix' => 'authority'], function () {
    Route::get('/vc',[DiuController::class,'vc'])->name('vc');
    Route::get('/pro-vc',[DiuController::class,'proVc'])->name('pro_vc');
    Route::get('/treasurer',[DiuController::class,'treasurer'])->name('treasurer');
    Route::get('/registrar',[DiuController::class,'registrar'])->name('registrar');
    Route::get('/chairman',[DiuController::class,'chairman'])->name('chairman');  

});
    Route::get('/faculy_of_law',[DiuController::class,'facultyLaw'])->name('law');
    Route::get('/faculy_of_business',[DiuController::class,'facultyBusiness'])->name('business');
    Route::get('/faculy_of_arts',[DiuController::class,'facultyArts'])->name('arts');
    Route::get('/faculy_of_science',[DiuController::class,'facultyScience'])->name('science');


    Route::get('/build_partnership',[DiuController::class,'buildPartnership'])->name('build_partnership');
    Route::get('/engage_our_strength',[DiuController::class,'engageOurStrength'])->name('engage');
    Route::get('/event_and_opportunity',[DiuController::class,'eventAndOpportunity'])->name('event_and_opportunity');

    Route::get('/diu',[DiuController::class,'diu'])->name('diu');
    Route::get('/campus-life',[DiuController::class,'campusLife'])->name('campus-life');
    Route::get('/study',[DiuController::class,'study'])->name('study');
  


