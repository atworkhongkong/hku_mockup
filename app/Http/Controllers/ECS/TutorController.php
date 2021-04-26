<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '尚融坊林基業中心', '方王換娣長者鄰舍中心', '華貴長者日間護理中心' , '南區長者綜合服務處', '林應和長者鄰舍中心'
    ];
    const TUTORS = [
        1 => ['tutor_id' => 1, 'code' => 'TR0001', 'name' => '黃岱丞', 'type' => '個人'],
        2 => ['tutor_id' => 2, 'code' => 'TR0002', 'name' => '郭佳其', 'type' => '個人'],
        3 => ['tutor_id' => 3, 'code' => 'TR0013', 'name' => '陳盈喬', 'type' => '個人'],
        4 => ['tutor_id' => 4, 'code' => 'TR0034', 'name' => '陳依婷', 'type' => '個人'],
    ];
    /*
    const TUTOR_PROGRAMMES = [
        1 => [1, 2],
        2 => [1],
        3 => [2],
        4 => [2]
    ];
    */
    public static function getTutors(): array
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

    public function edit($tutor_id)
    {
        $centers = self::CENTERS;
        $tutor = self::TUTORS[$tutor_id];
        return view('ECS.tutor.edit', compact('centers', 'tutor'));
    }

    public function programme($tutor_id)
    {
        return view('ECS.tutor.programme');
    }
}
