<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class VitalSignController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王煥娣長者鄰舍中心'
    ];

    const VITAL_SIGNS = [
        1 => ['date' => '2021-03-01', 'systolic' => 134, 'diastolic' => 92, 'pulse' => 70, 'height' => 162, 'weight' => 60.5],
        2 => ['date' => '2021-01-15', 'systolic' => 128, 'diastolic' => 88, 'pulse' => 65, 'height' => 162, 'weight' => 61.1],
        3 => ['date' => '2020-10-22', 'systolic' => 132, 'diastolic' => 95, 'pulse' => 68, 'height' => 162, 'weight' => 60.2],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('vital_signs', self::VITAL_SIGNS);
    }

    public function index(Request $request)
    {
        //echo URL::signedRoute('ecs.vital_sign.index', ['user' => 1]);
        return view('ECS.vital_sign.index');
    }

    public function create()
    {
        return view('ECS.vital_sign.create');
    }

    public function edit($id)
    {
        $vital_sign = self::VITAL_SIGNS[$id];
        return view('ECS.vital_sign.edit', compact('vital_sign'));
    }
}
