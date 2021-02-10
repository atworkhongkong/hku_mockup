<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarerController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '尚融坊林基業中心', '方王煥娣長者鄰舍中心', '華貴長者日間護理中心' , '南區長者綜合服務處'
    ];

    const CARERS = [
        '黃柏宇', '詹晏靖', '楊智盈', '廖怡秀', '王瑜育', '蕭育紹', '陳麗娟', '胡婷婷', '藍淑美', '陳家凌'
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $carers = self::CARERS;
        return view('ECS.carer.index', compact('centers', 'carers'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.carer.create', compact('centers'));
    }

    public function edit($carer_id)
    {
        $centers = self::CENTERS;
        $carer = self::CARERS[$carer_id - 1];
        return view('ECS.carer.edit', compact('centers', 'carer'));
    }
}
