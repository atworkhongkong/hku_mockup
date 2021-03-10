<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    const ROOMS = [
        1 => ['name' => 'Room 204', 'location' => '香港仔大道180號B二字樓', 'capacity' => '10', 'description' => '多用途房間'],
        2 => ['name' => 'Room 205', 'location' => '香港仔大道180號B二字樓', 'capacity' => '10', 'description' => ''],
        3 => ['name' => 'Room 304', 'location' => '香港仔大道180號B三字樓', 'capacity' => '15', 'description' => ''],
        4 => ['name' => 'Room 305', 'location' => '香港仔大道180號B三字樓', 'capacity' => '20', 'description' => '會議室'],
    ];

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
