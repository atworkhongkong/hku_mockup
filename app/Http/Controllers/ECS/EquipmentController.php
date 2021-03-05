<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EquipmentController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const EQUIPMENTS = [
        1 => [
            'name' => '輪椅',
            'count' => 3,
            'available_count' => 2,
            'items' => [
                ['label' => 'C001', 'create_date' => '2020-01-10', 'status' => 'A'],
                ['label' => 'C003', 'create_date' => '2020-01-20', 'status' => 'A'],
                ['label' => 'C004', 'create_date' => '2020-01-20', 'status' => 'I'],
            ]
        ],
        2 => [
            'name' => '助行架',
            'count' => 3,
            'available_count' => 3,
            'items' => [
                ['label' => 'DS001', 'create_date' => '2020-01-01', 'status' => 'A'],
                ['label' => 'DS002', 'create_date' => '2020-01-01', 'status' => 'A'],
                ['label' => 'DS003', 'create_date' => '2020-01-01', 'status' => 'A'],
            ]
        ],
        3 => [
            'name' => '四腳叉',
            'count' => 2,
            'available_count' => 2,
            'items' => [
                ['label' => 'TS001', 'create_date' => '2020-02-01', 'status' => 'A'],
                ['label' => 'TS002', 'create_date' => '2020-02-01', 'status' => 'A'],
            ]
        ],
        4 => [
            'name' => '枴杖',
            'count' => 3,
            'available_count' => 3,
            'items' => [
                ['label' => 'TS001', 'create_date' => '2020-02-01', 'status' => 'A'],
                ['label' => 'TS002', 'create_date' => '2020-02-01', 'status' => 'A'],
                ['label' => 'TS003', 'create_date' => '2020-02-01', 'status' => 'A'],
            ]
        ],
    ];

    const STATUSES = [
        'A' => '正常使用', 'I' => '暫停使用',
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('equipments', self::EQUIPMENTS);
        View::share('statuses', self::STATUSES);
    }

    public function index()
    {
        return view('ECS.equipment.index');
    }

    public function create()
    {
        return view('ECS.equipment.create');
    }

    public function edit($equipment_id)
    {
        $equipment = self::EQUIPMENTS[$equipment_id];
        return view('ECS.equipment.edit', compact('equipment'));
    }

    public function log($equipment_id)
    {
        $equipment = self::EQUIPMENTS[$equipment_id];
        return view('ECS.equipment.log', compact('equipment', 'equipment_id'));
    }
}
