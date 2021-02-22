<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class VolunteerController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '南區長者地區中心', '南區長者綜合服務處', '林應和長者鄰舍中心', '方王煥娣長者鄰舍中心'
    ];
    const VOLUNTEERS = [
        '黃柏宇', '詹晏靖', '楊智盈', '廖怡秀', '王瑜育', '蕭育紹', '陳麗娟', '胡婷婷', '藍淑美', '陳家凌'
    ];
    const GRADES = [
        '新力軍', '基本', '進階', '資深', '領袖', '讚賢'
    ];

    public function __construct()
    {
        $centers = self::CENTERS;
        $grades = self::GRADES;
        View::share('centers', $centers);
        View::share('grades', $grades);
    }

    public function index()
    {
        $volunteers = self::VOLUNTEERS;
        return view('ECS.volunteer.index', compact('volunteers'));
    }

    public function create()
    {
        return view('ECS.volunteer.create');
    }

    public function edit($id)
    {
        $volunteers = self::VOLUNTEERS;
        return view('ECS.volunteer.edit', compact( 'id','volunteers'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        $full_url = URL::full();

        $counts = [];
        foreach(self::CENTERS as $c) {
            if ($type == 'new') {
                $counts[$c] = mt_rand(2, 10);
            } else {
                $counts[$c] = mt_rand(50, 80);
            }
        }
        return view('ECS.volunteer.report', compact( 'type', 'full_url', 'counts'));
    }
}
