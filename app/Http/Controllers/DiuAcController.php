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
    // public function whyDiu(){
    //     return view('about.why-diu');
    // }
    // public function whyDiu(){
    //     return view('about.why-diu');
    // }
}
