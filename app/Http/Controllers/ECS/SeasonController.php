<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index()
    {
        return view('ECS.season.index');
    }

    public function create(Request $request)
    {
        return view('ECS.season.create');
    }

    public function edit(Request $request)
    {
        return view('ECS.season.edit');
    }
}
