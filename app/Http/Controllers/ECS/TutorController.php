<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '尚融坊林基業中心', '方王煥娣長者鄰舍中心', '華貴長者日間護理中心' , '南區長者綜合服務處'
    ];
    const TUTORS = [
        1 => ['tutor_id' => 1, 'code' => 'TR0001', 'name' => '黃岱丞'],
        2 => ['tutor_id' => 2, 'code' => 'TR0002', 'name' => '郭佳其'],
        3 => ['tutor_id' => 3, 'code' => 'TR0013', 'name' => '陳盈喬'],
        4 => ['tutor_id' => 4, 'code' => 'TR0034', 'name' => '陳依婷'],
    ];

    public static function getTutors()
    {
        return self::TUTORS;
    }

    public function index()
    {
        $centers = self::CENTERS;
        $tutors = self::TUTORS;
        return view('ECS.tutor.index', compact('centers', 'tutors'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.tutor.create', compact('centers'));
    }

    public function edit($id)
    {
        $centers = self::CENTERS;
        $tutor = self::TUTORS[$id];
        return view('ECS.tutor.edit', compact('centers', 'tutor'));
    }
}
