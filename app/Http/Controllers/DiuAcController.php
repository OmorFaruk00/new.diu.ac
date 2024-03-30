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
    public function semesterAbroadProgram(){
        return view('home.semester-abroad-program');
    }
    public function internshipAbroadProgram(){
        return view('home.internship-abroad-program');
    }
    public function studyTour(){
        return view('home.study-tour');
    }
    public function facultyExchangeProgram(){
        return view('home.faculty-exchange-program');
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
    public function convocation(){
         $convocations = $this->convocationData();
        return view('academics.convocation',compact('convocations'));
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
        return view('programs.details',$data );
    }


    public function campusLife(){
        return view('life.campus-life');
    }
    public function studentFacultyAchievements(){
        return view('life.student-faculty-achievements');
    }
    public function alumni(){
        return view('life.alumni');
    }
    public function institute(){
        return view('life.institute');
    }
    public function cell(){
        return view('life.cell');
    }

    public function centreOfExcellence(){
        return view('life.centre-of-excellence');
    }
    public function businessAnalyticalLab(){
        return view('life.business-analytical-lab');
    }
    public function newsletter(){
        return view('life.newsletter');
    }
    public function hobbyClub(){
        return view('life.hobby-club');
    }
    public function entrepreneurshipCell(){
        return view('life.entrepreneurship-cell');
    }
    public function sports(){
        return view('life.sports');
    }
    public function arka(){
        return view('life.arka');
    }

    public function placementProcess(){
        return view('placement.placement-process');
    }
    public function recruiters(){
        return view('placement.recruiters');
    }
    public function prePlacementTraining(){
        return view('placement.pre-placement-training');
    }
    public function studentPlacements(){
        return view('placement.student-placements');
    }
    public function internship(){
        return view('placement.internship');
    }

    public function mou(){
        return view('global.mou');
    }
    public function internationalConference(){
        return view('global.international-conference');
    }
    // public function mou(){
    //     return view('global.mou');
    // }
    // public function mou(){
    //     return view('global.mou');
    // }
    // public function mou(){
    //     return view('global.mou');
    // }
    // public function mou(){
    //     return view('global.mou');
    // }
   
}
