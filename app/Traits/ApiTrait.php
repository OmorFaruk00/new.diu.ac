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
      

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/public-diu-website/sliders', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('sliders', $result, 1440); //1440 minute = 1 day
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
            Cache::put('programs', $result, 1440); //1440 minute = 1 day
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
            Cache::put('about', $result, 1440); //1440 minute = 1 day
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
            Cache::put('partners', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function boardOfManagementData()
    {
        if (Cache::has('boardOfManagement')) {
            return Cache::get('boardOfManagement');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '//public-diu-website/diu-governing-bodies', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('boardOfManagement', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
}