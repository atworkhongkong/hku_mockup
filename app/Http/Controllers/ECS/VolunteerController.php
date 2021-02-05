<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '尚融坊林基業中心', '方王煥娣長者鄰舍中心', '華貴長者日間護理中心' , '南區長者綜合服務處'
    ];
    const VOLUNTEERS = [
        '黃柏宇', '詹晏靖', '楊智盈', '廖怡秀', '王瑜育', '蕭育紹', '陳麗娟', '胡婷婷', '藍淑美', '陳家凌'
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $volunteers = self::VOLUNTEERS;
        return view('ECS.volunteer.index', compact('centers', 'volunteers'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.volunteer.create', compact('centers'));
    }

    public function edit($id)
    {
        $centers = self::CENTERS;
        $volunteers = self::VOLUNTEERS;
        return view('ECS.volunteer.edit', compact( 'id', 'centers', 'volunteers'));
    }
}
