<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    const EQUIPMENTS = [
        1 => ['name' => '輪椅', 'count' => 5, 'borrow_date'],
        2 => ['name' => '助行架', 'count' => 10],
        3 => ['name' => '四腳叉', 'count' => 15],
        4 => ['name' => '枴杖', 'count' => 3],
    ];

    public function index()
    {
        $equipments = self::EQUIPMENTS;
        return view('ECS.equipment.index', compact('equipments'));
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
        return view('ECS.equipment.log', compact('equipment'));
    }
}
