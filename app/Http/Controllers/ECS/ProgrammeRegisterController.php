<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeRegisterController extends Controller
{
    public function index()
    {
        return view('ECS.programme_register.index');
    }

    public function create(Request $request)
    {
        return view('ECS.programme_register.create');
    }

    public function createMultiple(Request $request)
    {
        return view('ECS.programme_register.create_multiple');
    }

    public function edit(Request $request)
    {
        return view('ECS.programme_register.edit');
    }
}
