<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgrammeController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王煥娣長者鄰舍中心'
    ];
    const PROGRAMME_SEASONS = [
        1 => '11/2020 - 2/2021',
        2 => '3/2021 - 5/2021',
        3 => '6/2021 - 9/2021',
    ];
    const TUTORS = [
        '黃岱丞', '郭佳其', '陳盈喬', '陳依婷', '張品合', '吳文傑', '林清沛', '楊榮璇', '許若音', '張玉婷'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
    }

    public function index()
    {
        return view('ECS.programme.index');
    }

    public function create(Request $request)
    {
        $tutors = self::TUTORS;
        return view('ECS.programme.create', compact("tutors"));
    }

    public function edit(Request $request)
    {
        $tutors = self::TUTORS;
        return view('ECS.programme.edit', compact("tutors"));
    }

    public function register($programme_id)
    {
        return view('ECS.programme.register');
    }
}
