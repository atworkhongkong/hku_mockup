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
        4 => ['identity' => '長者會員', 'code' => '03EL30012', 'name' => '陳明康', 'phone' => '9898xxxx', 'equipment_id' => 1, 'create_date' => '2021-02-26', 'due_date' => '2021-03-27', 'late_day' => 0],
        3 => ['identity' => '長者會員', 'code' => '03EL30005', 'name' => '娻大妹', 'phone' => '9132xxxx', 'equipment_id' => 2, 'create_date' => '2021-02-25', 'due_date' => '2021-03-25', 'late_day' => 0],
        2 => ['identity' => '長者會員', 'code' => '03EL30018', 'name' => '趙霞', 'phone' => '9085xxxx', 'equipment_id' => 1, 'create_date' => '2021-02-21', 'due_date' => '2021-03-21', 'late_day' => 0],
        1 => ['identity' => '護老者', 'code' => 'J0012', 'name' => '黃敏', 'phone' => '6085xxxx', 'equipment_id' => 3, 'create_date' => '2021-01-01', 'due_date' => '2021-02-01', 'late_day' => 15]
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
