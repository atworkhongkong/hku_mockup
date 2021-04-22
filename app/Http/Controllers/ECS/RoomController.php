<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RoomController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '尚融坊林基業中心',
        3 => '方王換娣長者鄰舍中心',
        4 => '華貴長者日間護理中心',
        5 => '南區長者綜合服務處'
    ];
    const ROOMS = [
        1 => ['name' => 'Room 204', 'location' => '香港仔大道180號B二字樓', 'capacity' => '10', 'description' => '多用途房間', 'equipment' => '55吋LCD電視'],
        2 => ['name' => 'Room 205', 'location' => '香港仔大道180號B二字樓', 'capacity' => '10', 'description' => '', 'equipment' => '55吋LCD電視、投影機'],
        3 => ['name' => 'Room 304', 'location' => '香港仔大道180號B三字樓', 'capacity' => '15', 'description' => ''],
        4 => ['name' => 'Room 305', 'location' => '香港仔大道180號B三字樓', 'capacity' => '20', 'description' => '會議室'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
    }

    public function index()
    {
        $rooms = self::ROOMS;
        return view('ECS.room.index', compact('rooms'));
    }

    public function create()
    {
        return view('ECS.room.create');
    }

    public function edit($room_id)
    {
        $room = self::ROOMS[$room_id];
        return view('ECS.room.edit', compact('room'));
    }

    public static function getRooms(): array
    {
        return self::ROOMS;
    }
}
