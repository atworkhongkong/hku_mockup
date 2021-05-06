<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CouponController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];

    const COUPONS = [
        3 => ['code' => 'TN2021', 'name' => '10元優惠劵', 'expiry_date' => '2021-06-01', 'create_date' => '2021-04-01', 'created_by' => '同事A', 'status' => 'A'],
        2 => ['code' => 'AC2021', 'name' => '20元活動優惠劵', 'expiry_date' => '2021-07-31', 'create_date' => '2021-03-15', 'created_by' => '同事A', 'status' => 'A'],
        1 => ['code' => 'NY2021', 'name' => '20元優惠劵', 'expiry_date' => '2021-02-28', 'create_date' => '2021-01-01', 'created_by' => '同事B', 'status' => 'I'],
    ];

    const STATUSES = [
        'A' => '有效',
        'I' => '停用'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('coupons', self::COUPONS);
        View::share('statuses', self::STATUSES);
    }

    public function index()
    {
        return view('ECS.coupon.index');
    }

    public function create()
    {
        return view('ECS.coupon.create');
    }

    public function edit($coupon_id)
    {
        $coupon = self::COUPONS[$coupon_id];
        return view('ECS.coupon.edit', compact('coupon', 'coupon_id'));
    }
}
