<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class DiuAcController extends Controller
{
    use ApiTrait;
    public function index(){
        $sliders =  $this->sliderData();
        $programs =  $this->programsData();
        $partners =  $this->partnersData();
        return view('home.index', compact('sliders','programs','partners'));
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
    public function studentFacilities(){
        return view('about.student-facilities');
    }
    public function admissionProcess(){
        return view('admission.process');
    }
    public function programFeeStructure(){
        $programsFee =  $this->programsFeeData();
        return view('admission.fee-structure',compact('programsFee'));
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
          $keyResourcePersons = $this->keyResourcePersons();
        return view('academics.faculty',compact('keyResourcePersons'));
    }
    public function workshopSeminars(){
        return view('academics.workshop-seminar');
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
        $data['facultyMember'] = $this->departmentFacultyMember($slug);
        $data['slug'] =$slug ?? null;
        // return $data;
        return view('programs.details',$data );
    }
}
