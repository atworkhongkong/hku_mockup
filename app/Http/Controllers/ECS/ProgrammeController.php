<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    const PROGRAMME_SEASONS = [
        1 => '11/2020 - 2/2021',
        2 => '3/2021 - 5/2021',
        3 => '6/2021 - 9/2021',
    ];

    public function index()
    {
        return view('ECS.programme.index');
    }

    public function create(Request $request)
    {
        return view('ECS.programme.create');
    }

    public function edit(Request $request)
    {
        return view('ECS.programme.edit');
    }
}
