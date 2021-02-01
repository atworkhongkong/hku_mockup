<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        return view('ECS.meal.index');
    }

    public function create()
    {
        return view('ECS.meal.create');
    }

    public function edit()
    {
        return view('ECS.meal.edit');
    }
}
