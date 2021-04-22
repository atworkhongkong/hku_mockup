<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OrderMealController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
    }

    public function index(Request $request)
    {
        $member_code = $request->get('member_code') ? $request->get('member_code') : null;
        return view('ECS.order_meal.index', compact('member_code'));
    }

    public function create(Request $request)
    {
        $buy_counts = [1,2,3,4,5,6,7,8];
        $member_code = $request->get('member_code') ? $request->get('member_code') : null;
        return view('ECS.order_meal.create', compact('buy_counts','member_code'));
    }

    public function edit(Request $request, $order_id)
    {
        return view('ECS.order_meal.edit', compact('order_id'));
    }

    public function report()
    {
        return view('ECS.order_meal.report');
    }

    public function export()
    {
        return view('ECS.order_meal.export');
    }
}
