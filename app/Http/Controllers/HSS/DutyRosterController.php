<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;

class DutyRosterController extends Controller
{
    const CARE_WORKERS = [
        '淑惠', '美玲', '雅婷', '美惠', '麗華', '淑娟', '淑貞', '怡君', '淑華', '慧妍',
        '婧琪', '璟雯', '夢婷', '雪怡', '可嵐', '天瑜', '婧琪', '雪馨', '雨婷', '雅芙',
        '羅蘭', '朱迪'
    ];

    public function index()
    {
        $care_workers = self::CARE_WORKERS;
        $attends = ["全日", "第1節", "第2節"];

        return view('HSS/duty_roster/index', compact('care_workers', 'attends'));
    }

    /*
    private function getStartAndEndDate($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('Y-m-d');
        $dto->modify('+6 days');
        $ret['week_end'] = $dto->format('Y-m-d');
        return $ret;
    }
    */
}
