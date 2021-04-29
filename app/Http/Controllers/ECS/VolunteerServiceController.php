<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class VolunteerServiceController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];
    const TEAMS = [
        1 => '耆樂大使', 2 => '智友伴', 3 => '老友記小組'
    ];
    const SUPPORT_SERVICES = [
        1 => '電話聯絡',
        2 => '探訪',
        3 => '簡單個人援助'
    ];
    const SERVICES = [
        5 => ['volunteer' => '黃柏宇', 'volunteer_id' => 1, 'team_id' => 1, 'service_center_id' => 1, 'service' => '老人外展', 'hour' => 4, 'date' => '2021-01-31'],
        4 => ['volunteer' => '詹晏靖', 'volunteer_id' => 2, 'team_id' => 1, 'service_center_id' => 1, 'service' => '親子美味任務', 'hour' => 3, 'date' => '2021-01-31'],
        3 => ['volunteer' => '楊智盈', 'volunteer_id' => 3, 'team_id' => 2, 'service_center_id' => 1, 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-29'],
        2 => ['volunteer' => '廖怡秀', 'volunteer_id' => 4, 'team_id' => 3, 'service_center_id' => 1, 'service' => '心靈加油站', 'hour' => 4, 'date' => '2021-01-28'],
        1 => ['volunteer' => '王瑜育', 'volunteer_id' => 5, 'team_id' => 2, 'service_center_id' => 1, 'service' => '親子暖暖笠', 'hour' => 6, 'date' => '2021-01-21'],
    ];
    const ACTIVENESS = [
        'A' => '活躍義工',
        'I' => '非活躍義工'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('teams', self::TEAMS);
        View::share('activeness', self::ACTIVENESS);
        View::share('support_services', self::SUPPORT_SERVICES);
    }

    public function index()
    {
        $services = self::SERVICES;
        return view('ECS.volunteer_service.index', compact('services'));
    }

    public function create()
    {
        return view('ECS.volunteer_service.create');
    }

    public function edit($id)
    {
        $service = self::SERVICES[$id];
        return view('ECS.volunteer_service.edit', compact('id', 'service'));
    }

    public function report(Request $request)
    {
        //$type = isset($request->get('type')) ? $type : '';
        if ($request->get('type')) {
            $type = $request->get('type');
            $full_url = URL::full();
        } else {
            $type = 'service_hour';
            $full_url = URL::full() . '?type=service_hour';
        }
        $services = [
            1 => ['volunteer_id' => 1, 'code' => 'VO100082', 'volunteer' => '黃柏宇', 'activeness' => 'A', 'hour' => 54, 'grade' => '基本', 'ste' => 'STE'],
            2 => ['volunteer_id' => 2, 'code' => 'VO100075', 'volunteer' => '詹晏靖', 'activeness' => 'A', 'hour' => 68, 'grade' => '進階', 'ste' => 'STE'],
            3 => ['volunteer_id' => 3, 'code' => 'VO100063', 'volunteer' => '楊智盈', 'activeness' => 'A', 'hour' => 47, 'grade' => '基本', 'ste' => 'STE'],
            4 => ['volunteer_id' => 4, 'code' => 'VO100050', 'volunteer' => '廖怡秀', 'activeness' => 'A', 'hour' => 75, 'grade' => '基本', 'ste' => 'STE']
        ];
        return view('ECS.volunteer_service.report', compact('services', 'full_url', 'type'));
    }
}
