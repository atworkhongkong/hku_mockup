<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealIngredientController extends Controller
{
    const INGREDIENTS = [
        1 => ['name' => '牛肉', 'amount' => 30],
        2 => ['name' => '豬肉', 'amount' => 20],
        3 => ['name' => '雞肉', 'amount' => 18],
        4 => ['name' => '生菜', 'amount' => 10],
        5 => ['name' => '芽菜', 'amount' => 8],
        6 => ['name' => '節瓜', 'amount' => 10]
    ];

    public function index()
    {
        $ingredients = self::INGREDIENTS;
        return view('ECS.meal_ingredient.index', compact('ingredients'));
    }

    public function create()
    {
        return view('ECS.meal_ingredient.create');
    }

    public function edit($ingredient_id)
    {
        $ingredient = self::INGREDIENTS[$ingredient_id];
        return view('ECS.meal_ingredient.edit', compact('ingredient'));
    }

    public function log($ingredient_id)
    {
        $ingredient = self::INGREDIENTS[$ingredient_id];
        return view('ECS.meal_ingredient.log', compact('ingredient'));
    }
}
