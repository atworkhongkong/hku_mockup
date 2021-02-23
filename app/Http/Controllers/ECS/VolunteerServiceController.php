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
        5 => '方王煥娣長者鄰舍中心'
    ];
    const TEAMS = [
        1 => '耆樂大使', 2 => '智友伴', 3 => '老友記小組'
    ];
    const SERVICES = [
        5 => ['volunteer' => '黃柏宇', 'team_id' => 1, 'service_center_id' => 1, 'service' => '老人外展', 'hour' => 4, 'date' => '2021-01-31'],
        4 => ['volunteer' => '何展良', 'team_id' => 1, 'service_center_id' => 1, 'service' => '親子美味任務', 'hour' => 3, 'date' => '2021-01-31'],
        3 => ['volunteer' => '李浩文', 'team_id' => 2, 'service_center_id' => 1, 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-29'],
        2 => ['volunteer' => '呂大樂', 'team_id' => 3, 'service_center_id' => 2, 'service' => '心靈加油站', 'hour' => 4, 'date' => '2021-01-28'],
        1 => ['volunteer' => '張浩添', 'team_id' => 2, 'service_center_id' => 1, 'service' => '親子暖暖笠', 'hour' => 6, 'date' => '2021-01-21'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('teams', self::TEAMS);
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

    public function report()
    {
        $services = [
            7 => ['volunteer' => '黃柏宇', 'service' => '老人外展', 'hour' => 4, 'date' => '2021-01-31'],
            6 => ['volunteer' => '王妹', 'service' => '老人外展', 'hour' => 3, 'date' => '2021-01-31'],
            5 => ['volunteer' => '王妹', 'service' => '親子美味任務', 'hour' => 3, 'date' => '2021-01-30'],
            4 => ['volunteer' => '趙霞', 'service' => '親子美味任務', 'hour' => 5, 'date' => '2021-01-30'],
            3 => ['volunteer' => '雷根', 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-28'],
            2 => ['volunteer' => '黃柏宇', 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-28'],
            1 => ['volunteer' => '王妹', 'service' => '親子暖暖笠', 'hour' => 8, 'date' => '2021-01-21'],
            0 => ['volunteer' => '黃柏宇', 'service' => '親子暖暖笠', 'hour' => 6, 'date' => '2021-01-21'],
        ];
        $full_url = URL::full();
        return view('ECS.volunteer_service.report', compact('services', 'full_url'));
    }
}
