<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgrammeRegisterController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王煥娣長者鄰舍中心'
    ];
    const MEMBERSHIPS = [
        1 => '長者會員',
        2 => '長者會員(綜援)',
        3 => '驕陽會員',
        4 => '護老者',
        5 => '義工',
        6 => '非會員'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
    }

    public function show()
    {
        return view('ECS.programme_register.show');
    }

    public function create(Request $request)
    {
        return view('ECS.programme_register.create');
    }

    public function createMultiple(Request $request)
    {
        return view('ECS.programme_register.create_multiple');
    }

    public function cancel(Request $request)
    {
        return view('ECS.programme_register.cancel');
    }

    public function report()
    {
        $report = [
            [
                'code' => 'J3C18032',
                'name' => '中秋月餅慶團圓',
                'date' => '14',
                'register_count' => 18,
                'lesson_count' => 1,
                'attendance_count' => 18,
                'indicator' => 3.3,
                'contact_person' => '簡文標',
                'fee' => 820
            ],
            [
                'code' => 'J3A18111',
                'name' => '健腦操02',
                'date' => '12,19,26',
                'register_count' => 29,
                'lesson_count' => 3,
                'attendance_count' => 87,
                'indicator' => 3.1,
                'contact_person' => '鄧英琪',
                'fee' => 1450
            ],
            [
                'code' => 'J3A18107',
                'name' => '自強運動02',
                'date' => '11,13,18,20,27',
                'register_count' => 40,
                'lesson_count' => 5,
                'attendance_count' => 198,
                'indicator' => 3.1,
                'contact_person' => '容淑儀',
                'fee' => 4000
            ],
        ];
        return view('ECS.programme_register.report', compact('report'));
    }

//    public function edit(Request $request)
//    {
//        return view('ECS.programme_register.edit');
//    }
}
