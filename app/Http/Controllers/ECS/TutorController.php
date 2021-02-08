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
        '黃岱丞', '郭佳其', '陳盈喬', '陳依婷', '張品合', '吳文傑', '林清沛', '楊榮璇', '許若音', '張玉婷'
    ];

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
        $tutor = self::TUTORS[$id - 1];
        return view('ECS.tutor.edit', compact('centers', 'tutor'));
    }
}
