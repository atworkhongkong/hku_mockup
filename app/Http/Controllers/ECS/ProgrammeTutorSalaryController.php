<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeTutorSalaryController extends Controller
{
    public function edit()
    {
        return view('ECS.programme_tutor_salary.edit');
    }
}
