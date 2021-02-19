<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const EQUIPMENTS = [
        1 => ['name' => '輪椅', 'count' => 5, 'borrow_date'],
        2 => ['name' => '助行架', 'count' => 10],
        3 => ['name' => '四腳叉', 'count' => 15],
        4 => ['name' => '枴杖', 'count' => 3],
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $equipments = self::EQUIPMENTS;
        return view('ECS.equipment.index', compact('centers', 'equipments'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.equipment.create', compact('centers'));
    }

    public function edit($equipment_id)
    {
        $centers = self::CENTERS;
        $equipment = self::EQUIPMENTS[$equipment_id];
        return view('ECS.equipment.edit', compact('centers', 'equipment'));
    }

    public function log($equipment_id)
    {
        $equipment = self::EQUIPMENTS[$equipment_id];
        return view('ECS.equipment.log', compact('equipment'));
    }
}
