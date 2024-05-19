<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Traits\ApiTrait;

class DiuController extends Controller
{
    use ApiTrait;
    public function index(){
        // $sliders =  $this->sliderData();
        // $programs =  $this->programsData();
        // $partners =  $this->partnersData();
        // $event = $this->getEvent();
        return view('home.index');
    }
    public function about(){
        return view('about.about');
    }
    public function test(){
         $event = $this->getEvent();
        return view('test',['event'=>$event]);
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
        return view('academics.future-student');
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
    public function journalDetails($id){
        return view('journal.details',compact('id'));

    }
    public function publications(){
        $publications = $this->publication();
        return view('academics.publications',compact('publications'));
    }
    public function programs($slug){
        $data['basic'] = $this->departmentBasicInfo($slug);
        $data['objective'] = $this->departmentObjective($slug);
        $data['facility'] = $this->departmentFacility($slug);
        $data['gallery'] = $this->departmentGallery($slug);
        $data['syllabus'] = $this->departmentSyllabus($slug);
        // $data['facultyMember'] = $this->departmentFacultyMember($slug);
        $data['slug'] =$slug ?? null;
        return view('programs.details',$data );
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
    public function news(){
    
        return view('newsEvent.news');
    }
    public function events(){
    
        return view('newsEvent.events');
    }
    public function noticeDetails($slug){
        // $notice = $this->getNoticeDetails($slug);
        return view('newsEvent.notice-details',compact('slug'));
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


    public function facultyLaw(){
        return view('faculty.law');
    }
    public function facultyBusiness(){
        return view('faculty.business');
    }
    public function facultyScience(){
        return view('faculty.science');
    }
    public function facultyArts(){
        return view('faculty.arts');
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
    public function diu(){
        return view('menu.diu');
    }
    public function campusLife(){
        return view('menu.campus-life');
    }
    public function study(){
        return view('menu.study');
    }
   
   

   
   

    

    
   
}
