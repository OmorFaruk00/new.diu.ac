<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Traits\ApiTrait;

class DiuController extends Controller
{
    use ApiTrait;
    public function index(){
        $counter = $this->getCounterData();
        return view('home.index',compact('counter'));
    }
    public function about(){
        return view('about.about');
    }
    public function test(){
        return view('test');
        // // The API URL
        //  $api_url = 'https://api.diu.ac/api_test';

        // // Initialize cURL session
        // $ch = curl_init();

        // // Set the options for cURL
        // curl_setopt($ch, CURLOPT_URL, $api_url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

        // // Execute the cURL request
        // $response = curl_exec($ch);
        // dd($response);

        // // Check if any error occurred
        // if (curl_errno($ch)) {
        //     echo 'cURL error: ' . curl_error($ch);
        // } else {
        //     // Decode the JSON response into an associative array
        //     $data = json_decode($response, true);

        //     // Display the data (you can also process it as needed)
        //     echo '<pre>';
        //     print_r($data);
        //     echo '</pre>';
        // }

        // // Close the cURL session
        // curl_close($ch);

    }


    public function aboutUs(){
        return view('about.index');
    }
    public function whyDiu(){
        return view('about.why-diu');
    }
    public function visionMission(){
        return view('about.vision-mission');
    }
    public function boardOfManagement(){
        $boardOfManagement =  $this->boardOfManagementData();
        return view('about.board-of-management',compact('boardOfManagement'));
    }
    public function admissionProcess(){
        return view('admission.process');
    }
    public function programFeeStructure(){
        return view('admission.fee-structure');
    }
    public function internationalAdmission(){
        return view('admission.international-admission');
    }

    public function scholarships(){
        return view('admission.scholarship');
    }
    public function admissionHelpDesk(){
        return view('admission.admission-help-desk');
    }
    public function faculty(){
        return view('academics.faculty');
    }
    public function futureStudent(){
         $programs =  $this->programsData();
        //  return $programs->data;
        return view('academics.future-student',compact('programs'));
    }
    public function facultyDetails($slug){
        return view('academics.faculty-details', compact('slug'));
    }
    public function convocation(){
         $convocations = $this->convocationData();
        return view('academics.convocation',compact('convocations'));
    }
    public function journals(){
        return view('journal.index');
    }
    public function journalsVol12(){
        return view('journal.vol12');

    }
    public function journalsVol13(){
        return view('journal.vol13');

    }
    public function journalDetails($id){
        return view('journal.details',compact('id'));

    }
    public function publications(){
        $publications = $this->publication();
        return view('academics.publications',compact('publications'));
    }
    public function programs($slug){
        $basic = $this->departmentBasicInfo($slug);
        $objective= $this->departmentObjective($slug);
        $syllabus = $this->departmentSyllabus($slug);
        $facultyMember = $this->departmentFacultyMember($slug);
        return view('programs.details',compact('basic','slug','syllabus','facultyMember','objective'));
    }

    public function programsFaciliry($slug,$id){
       return view('programs.facility-details',compact('slug','id') );

    }



    public function studentFacultyAchievements(){
        return view('life.student-faculty-achievements');
    }

    public function cell(){
        return view('life.cell');
    }

    public function contact(){
        return view('contact');
    }
    public function notice(){

        return view('newsEvent.notice');
    }
    public function events(){

        return view('newsEvent.events');
    }
    public function noticeDetails($slug){
        // $notice = $this->getNoticeDetails($slug);
        return view('newsEvent.notice-details',compact('slug'));
    }
    public function programDetails($slug){

        return view('community.program-details',compact('slug'));
    }
    public function programNoticeDetails($slug)
    {
      return view('programs.notice-details',compact('slug'));
    }
    public function certificateVerification(){
        return view('academics.certificate-verification');
    }
    public function library(){
        return view('campus-life.library');
    }
    public function club(){
        return view('campus-life.club');
    }
    public function lab(){
        return view('campus-life.lab');
    }
    public function alumni(){
        return view('campus-life.alumni');
    }
    public function academicSession(){
        return view('campus-life.academic-session');
    }
    public function healthService(){
        return view('campus-life.health-service');
    }
    public function accommodation(){
        return view('campus-life.accommodation');
    }
    public function studentWelfare(){
        return view('campus-life.student-welfare');
    }
    public function careerCounseling(){
        return view('campus-life.career-counseling');
    }
    public function courseCounseling(){
        return view('campus-life.course-counseling');
    }
    public function internet(){
        return view('campus-life.internet');
    }
    public function canteen(){
        return view('campus-life.canteen');
    }



    public function iqac(){
        return view('cell.iqac');
    }
    public function tcrc(){
        return view('cell.tcrc');
    }
    public function sbac(){
        return view('cell.sbac');
    }
    public function cecd(){
        return view('cell.cecd');
    }

    public function vc(){
        return view('authority.vc');
    }
    public function proVc(){
        return view('authority.pro-vc');
    }
    public function treasurer(){
        return view('authority.treasurer');
    }
    public function  registrar(){
        return view('authority. registrar');
    }
    public function chairman(){
        return view('authority.chairman');
    }
    public function viceChairman(){
        return view('authority.vice-chairman');
    }
    public function proctor(){
        return view('authority.proctor');
    }
    public function controller(){
        return view('authority.controller');
    }
    public function  studentsWelfareAdvisor(){
        return view('authority.students-welfare-advisor');
    }


    public function facultyLaw(){

       $facultyMember =  $this->getFacultyMember('faculy-of-law');
        return view('faculty.law',compact('facultyMember'));
    }
    public function facultyBusiness(){
        $facultyMember =  $this->getFacultyMember('faculy-of-business');
        return view('faculty.business',compact('facultyMember'));
    }
    public function facultyScience(){
         $facultyMember =  $this->getFacultyMember('faculy-of-science');
        return view('faculty.science',compact('facultyMember'));
    }
    public function facultyArts(){
         $facultyMember =  $this->getFacultyMember('faculy-of-arts');
        return view('faculty.arts',compact('facultyMember'));
    }

    public function buildPartnership(){
        return view('community.build-partnership');
    }
    public function engageOurStrength(){
        return view('community.engage');
    }
    public function eventAndOpportunity(){
        return view('community.event-and-opportunity');
    }
    public function institute(){
        return view('community.institute');
    }


    public function trendingCourses(){
        return view('why.trending-courses');
    }
    public function booksAndLibrary(){
        return view('why.books-and-library');
    }
    public function certifiedTeachers(){
        return view('why.certified-teacher');
    }
    public function certification(){
        return view('why.certification');
    }






    public function diu(){
        return view('menu.diu');
    }
    public function campusLife(){
        return view('menu.campus-life');
    }
    public function study(){
        return view('menu.study');
    }


    public function registerOffice(){
        return view('about.office-of-register');

    }
    public function treasurerOffice(){
        return view('about.office-of-treasurer');
    }
    public function chairmanOffice(){
        return view('about.office-of-chairman');
    }
    public function viceChancellorOffice(){
        return view('about.office-of-vice-chancellor');
    }







    public function privacyPolicy()
    {
        return view('privacyPolicy.index');
    }

    public function codeOfConduct()
    {
        return view('codeOfConduct.index');
    }
    public function tramsCondition()
    {
        return view('privacyPolicy.trams_and_condition');
    }

    public function researchAndPublicationCell()
    {
        return view('researchPublication.index');
    }

    public function authHelpStudent($type)
    {
        // $teams =  $this->getAuthorityTeam($type);
        return view('authority.team',compact('type'));

    }










}
