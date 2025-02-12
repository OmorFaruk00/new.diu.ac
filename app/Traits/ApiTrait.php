<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Ixudra\Curl\Facades\Curl;

trait ApiTrait
{
    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]
        );
    }

    public function sliderData()
    {
        if (Cache::has('sliders')) {
            return Cache::get('sliders');
        }
        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/sliders', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('sliders', $result); //43200 minute = 30 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function programsData()
    {
        if (Cache::has('programs')) {
            return Cache::get('programs');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/programs', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('programs', $result); //43200 minute = 30 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function aboutData()
    {
        if (Cache::has('about')) {
            return Cache::get('about');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/about/cdc', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('about', $result); //43200 minute = 30 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function partnersData()
    {
        if (Cache::has('partners')) {
            return Cache::get('partners');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/partners', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('partners', $result); //43200 minute = 30 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function boardOfManagementData()
    {

        //  Cache::rememberForever('boardOfManagement', function () {
        //     // Perform the expensive operation to retrieve data
        //     return $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/diu-governing-bodies', false, self::ssl()));
        // });

        if (Cache::has('boardOfManagement')) {
            return Cache::get('boardOfManagement');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/diu-governing-bodies', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('boardOfManagement', $result); //43200 minute = 30 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function programsFeeData()
    {
        if (Cache::has('courseFee')) {
            return Cache::get('courseFee');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/get_all_course_fee', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('courseFee', $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function keyResourcePersons()
    {
        if (Cache::has('keyResourcePersons')) {
            return Cache::get('keyResourcePersons');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/key-resource-persons', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('keyResourcePersons', $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function publication()
    {
        if (Cache::has('publication')) {
            return Cache::get('publication');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/publication', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('publication', $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function convocationData()
    {
        if (Cache::has('convocation')) {
            return Cache::get('convocation');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/convocations', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('convocation', $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function departmentBasicInfo($slug)
    {
        if (Cache::has('basics_'.$slug)) {
            return Cache::get('basics_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-basic-info/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('basics_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function departmentObjective($slug)
    {
        if (Cache::has('objective_'.$slug)) {
            return Cache::get('objective_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-objectives/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('objective_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function departmentFacility($slug)
    {
        if (Cache::has('facility_'.$slug)) {
            return Cache::get('facility_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-facilities/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('facility_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function departmentGallery($slug)
    {
        if (Cache::has('gallery_'.$slug)) {
            return Cache::get('gallery_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-gallery/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('gallery_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function departmentSyllabus($slug)
    {
        if (Cache::has('syllabus_'.$slug)) {
            return Cache::get('syllabus_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-syllabus/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('syllabus_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function departmentFacultyMember($slug)
    {
        if (Cache::has('facultyMembers_'.$slug)) {
            return Cache::get('facultyMembers_'.$slug);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/department-faculty-member/'.$slug, false, self::ssl()));
        if (!empty($result)) {
            Cache::put('facultyMembers_'.$slug, $result); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function getNotice()
    {
        if (Cache::has('notice')) {
            return Cache::get('notice');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/notice-event?type=notice', false, self::ssl()));
        if (!empty($result)) {
            Cache::put('notice', $result, 1440); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function getEvent()
    {
        if (Cache::has('event')) {
            return Cache::get('event');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/notice-event?type=event', false, self::ssl()));
        if (!empty($result)) {
            Cache::put('event', $result, 1440); 
            return $result;
        }
        return response()->json(NULL, 404);
    }


    public function getCounterData()
    {
        if (Cache::has('counter')) {
            return Cache::get('counter');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/counter-statistics', false, self::ssl()));
        if (!empty($result)) {
            Cache::put('counter', $result, 1440); 
            return $result;
        }
        return response()->json(NULL, 404);
    }
    
      


      

    public function getNoticeDetails($slug)    {     

        return $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/notice/'.$slug, false, self::ssl()));
       
    }

 
}
