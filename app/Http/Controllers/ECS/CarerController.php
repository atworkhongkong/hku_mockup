<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarerController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '尚融坊林基業中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '華貴長者日間護理中心',
        5 => '南區長者綜合服務處'
    ];

    const CARERS = [
        1 => ['name' => '黃柏宇', 'type' => '護老者', 'status' => 'A', 'center' => 2, 'create_date' => '2020-12-08'],
        2 => ['name' => '詹晏靖', 'type' => '護老者', 'status' => 'A', 'center' => 2, 'create_date' => '2020-06-15'],
        3 => ['name' => '楊智盈', 'type' => '護老者', 'status' => 'A', 'center' => 4, 'create_date' => '2020-01-12'],
        4 => ['name' => '廖怡秀', 'type' => '護老者', 'status' => 'A', 'center' => 5, 'create_date' => '2019-11-01'],
        5 => ['name' => '王瑜育', 'type' => '有需要護老者', 'status' => 'I', 'center' => 1, 'create_date' => '2019-08-18'],
        6 => ['name' => '蕭育紹', 'type' => '有需要護老者', 'status' => 'A', 'center' => 3, 'create_date' => '2019-05-27']
    ];

    const STATUSES = [
        'A' => '有效',
        'I' => '暫停'
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $carers = self::CARERS;
        $statuses = self::STATUSES;
        return view('ECS.carer.index', compact('centers', 'carers', 'statuses'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.carer.create', compact('centers'));
    }

    public function edit($carer_id)
    {
        $centers = self::CENTERS;
        $carer = self::CARERS[$carer_id];
        $statuses = self::STATUSES;
        return view('ECS.carer.edit', compact('centers', 'carer', 'statuses', 'carer_id'));
    }

    public function report(Request $request)
    {
        $centers = self::CENTERS;
        $type = $request->get('type');
        return view('ECS.carer.report', compact('centers', 'type'));
    }
}
