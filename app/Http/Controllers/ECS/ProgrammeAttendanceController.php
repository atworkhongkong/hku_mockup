<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeAttendanceController extends Controller
{
    public function index($id)
    {
        return view('ECS.programme_attendance.index');
    }

    public function create($programme_id)
    {
        return view('ECS.programme_attendance.create');
    }

    public function edit($programme_id)
    {
        return view('ECS.programme_attendance.edit');
    }

    public function printAttendance($programme_id)
    {
        return view('ECS.programme_attendance.print_attendance');
    }
}
