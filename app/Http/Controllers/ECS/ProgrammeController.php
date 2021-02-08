<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    const PROGRAMME_SEASONS = [
        1 => '11/2020 - 2/2021',
        2 => '3/2021 - 5/2021',
        3 => '6/2021 - 9/2021',
    ];
    const TUTORS = [
        '黃岱丞', '郭佳其', '陳盈喬', '陳依婷', '張品合', '吳文傑', '林清沛', '楊榮璇', '許若音', '張玉婷'
    ];

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
}
