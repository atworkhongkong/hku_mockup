<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function mealDelivery()
    {
        return view('HSS/meal_delivery');
    }
}
