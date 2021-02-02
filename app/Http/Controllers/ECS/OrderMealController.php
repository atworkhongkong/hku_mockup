<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderMealController extends Controller
{
    public function index(Request $request)
    {
        $member_code = $request->get('member_code') ? $request->get('member_code') : null;
        return view('ECS.order_meal.index', compact('member_code'));
    }

    public function create(Request $request)
    {
        $member_code = $request->get('member_code') ? $request->get('member_code') : null;
        return view('ECS.order_meal.create', compact('member_code'));
    }

    public function edit(Request $request, $order_id)
    {
        return view('ECS.order_meal.edit', compact('order_id'));
    }

    public function report()
    {
        return view('ECS.order_meal.report');
    }
}
