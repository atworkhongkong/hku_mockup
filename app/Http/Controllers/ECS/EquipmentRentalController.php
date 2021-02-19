<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentRentalController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const EQUIPMENTS = [
        1 => ['name' => '輪椅', 'count' => 5],
        2 => ['name' => '助行架', 'count' => 10],
        3 => ['name' => '四腳叉', 'count' => 15],
        4 => ['name' => '枴杖', 'count' => 3],
    ];

    const RENTALS = [
        3 => ['identity' => '長者會員', 'code' => '03EL30012', 'name' => '陳明康', 'phone' => '9898xxxx', 'equipment_id' => 1, 'count' => 1, 'create_date' => '2021-02-26'],
        2 => ['identity' => '長者會員', 'code' => '03EL30005', 'name' => '娻大妹', 'phone' => '9132xxxx', 'equipment_id' => 2, 'count' => 1, 'create_date' => '2021-02-25'],
        1 => ['identity' => '長者會員', 'code' => '03EL30018', 'name' => '趙霞', 'phone' => '9085xxxx', 'equipment_id' => 1, 'count' => 1, 'create_date' => '2021-02-21']
    ];

    const RENTAL_TIME = [
        1 => '1個月 - $20', 2 => '3日 - $5'
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $equipments = self::EQUIPMENTS;
        $rentals = self::RENTALS;
        return view('ECS.equipment_rental.index', compact('centers', 'equipments', 'rentals'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        $equipments = self::EQUIPMENTS;
        $rental_time = self::RENTAL_TIME;
        return view('ECS.equipment_rental.create', compact('centers', 'equipments', 'rental_time'));
    }

    public function edit($rental_id)
    {
        $centers = self::CENTERS;
        $equipments = self::EQUIPMENTS;
        $rental = self::RENTALS[$rental_id];
        $rental_time = self::RENTAL_TIME;
        return view('ECS.equipment_rental.edit', compact('centers', 'equipments', 'rental', 'rental_time'));
    }

    public function report()
    {
        $equipments = self::EQUIPMENTS;
        $equipment_rental_counts = [
            1 => 10,
            2 => 8,
            3 => 5,
            4 => 9
        ];
        return view('ECS.equipment_rental.report', compact('equipments', 'equipment_rental_counts'));
    }
}
