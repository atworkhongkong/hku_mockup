<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const PRODUCTS = [
        1 => ['name' => '奶粉 (大)', 'count' => 50],
        2 => ['name' => '奶粉 (細)', 'count' => 80],
        3 => ['name' => '尿片 (大)', 'count' => 120],
        4 => ['name' => '尿片 (中)', 'count' => 100],
        5 => ['name' => '尿片 (細)', 'count' => 100],
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
