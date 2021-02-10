<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentRentalController extends Controller
{
    const EQUIPMENTS = [
        1 => ['name' => '輪椅', 'count' => 5],
        2 => ['name' => '血壓計', 'count' => 10],
        3 => ['name' => '助行架', 'count' => 15],
        4 => ['name' => '助行車', 'count' => 3],
    ];

    const RENTALS = [
        3 => ['member_code' => '03EL30012', 'member_name' => '陳明康', 'equipment_id' => 1, 'count' => 1, 'create_date' => '2021-02-01'],
        2 => ['member_code' => '03EL30005', 'member_name' => '娻大妹', 'equipment_id' => 2, 'count' => 1, 'create_date' => '2021-01-25'],
        1 => ['member_code' => '03EL30018', 'member_name' => '趙霞', 'equipment_id' => 1, 'count' => 1, 'create_date' => '2021-01-21']
    ];

    const RENTAL_TIME = [
        1 => '7日', 2 => '14日'
    ];

    public function index()
    {
        $equipments = self::EQUIPMENTS;
        $rentals = self::RENTALS;
        return view('ECS.equipment_rental.index', compact('equipments', 'rentals'));
    }

    public function create()
    {
        $equipments = self::EQUIPMENTS;
        $rental_time = self::RENTAL_TIME;
        return view('ECS.equipment_rental.create', compact('equipments', 'rental_time'));
    }

    public function edit($rental_id)
    {
        $equipments = self::EQUIPMENTS;
        $rental = self::RENTALS[$rental_id];
        return view('ECS.equipment_rental.edit', compact('equipments', 'rental'));
    }
}
