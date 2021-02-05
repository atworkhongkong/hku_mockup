<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerServiceController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '尚融坊林基業中心', '方王煥娣長者鄰舍中心', '華貴長者日間護理中心' , '南區長者綜合服務處'
    ];

    const SERVICES = [
        4 => ['volunteer' => '黃柏宇', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '老人外展', 'hour' => 4, 'date' => '2021-01-31'],
        3 => ['volunteer' => '黃柏宇', 'service_center' => '尚融坊林基業中心', 'service' => '親子美味任務', 'hour' => 3, 'date' => '2021-01-31'],
        2 => ['volunteer' => '黃柏宇', 'service_center' => '尚融坊林基業中心', 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-29'],
        1 => ['volunteer' => '黃柏宇', 'service_center' => '華貴長者日間護理中心', 'service' => '心靈加油站', 'hour' => 4, 'date' => '2021-01-28'],
        0 => ['volunteer' => '黃柏宇', 'service_center' => '華貴長者日間護理中心', 'service' => '親子暖暖笠', 'hour' => 6, 'date' => '2021-01-21'],
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $services = self::SERVICES;
        return view('ECS.volunteer_service.index', compact('services'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.volunteer_service.create', compact('centers'));
    }

    public function edit($id)
    {
        $centers = self::CENTERS;
        $service = self::SERVICES[$id - 1];
        return view('ECS.volunteer_service.edit', compact('id', 'centers', 'service'));
    }

    public function report()
    {
        $centers = self::CENTERS;
        $services = [
            7 => ['volunteer' => '黃柏宇', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '老人外展', 'hour' => 4, 'date' => '2021-01-31'],
            6 => ['volunteer' => '王妹', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '老人外展', 'hour' => 3, 'date' => '2021-01-31'],
            5 => ['volunteer' => '王妹', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '親子美味任務', 'hour' => 3, 'date' => '2021-01-30'],
            4 => ['volunteer' => '趙霞', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '親子美味任務', 'hour' => 5, 'date' => '2021-01-30'],
            3 => ['volunteer' => '雷根', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-28'],
            2 => ['volunteer' => '黃柏宇', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '愛健康', 'hour' => 4, 'date' => '2021-01-28'],
            1 => ['volunteer' => '王妹', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '親子暖暖笠', 'hour' => 8, 'date' => '2021-01-21'],
            0 => ['volunteer' => '黃柏宇', 'service_center' => '賽馬會黃志強長者地區中心', 'service' => '親子暖暖笠', 'hour' => 6, 'date' => '2021-01-21'],
        ];
        return view('ECS.volunteer_service.report', compact('centers', 'services'));
    }
}
