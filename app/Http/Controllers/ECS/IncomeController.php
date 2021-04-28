<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IncomeController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];

    const BALANCES = [
        [
            'time' => '2021-03-01 16:15',
            'invoice' => 'A0000012',
            'income_type' => '活動',
            'programme_code' => 'JM30130',
            'member_code' => '03EL300102',
            'member_name' => '陳永仁',
            'fee' => 140,
            'receive_method' => '現金',
            'created_by' => '同事A',
            'url' => '/ecs/programme_register/10',
        ],
        [
            'time' => '2021-03-01 14:20',
            'invoice' => 'A0000011',
            'income_type' => '活動',
            'programme_code' => 'JM30130',
            'member_code' => '03EL300604',
            'member_name' => '劉健明',
            'fee' => 140,
            'receive_method' => '現金',
            'created_by' => '同事A',
            'url' => '/ecs/programme_register/9',
        ],
        [
            'time' => '2021-03-01 11:48',
            'invoice' => 'A0000010',
            'income_type' => '購物',
            'programme_code' => '',
            'member_code' => '03EL30012',
            'member_name' => '陳明康',
            'fee' => 155,
            'receive_method' => '現金',
            'created_by' => '同事A',
            'url' => '/ecs/purchase/4/edit'
        ],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
    }

    public function balance()
    {
        $balances = self::BALANCES;
        return view('ECS.income.balance', compact('balances'));
    }

    public function balanceDone()
    {
        $balances = self::BALANCES;
        return view('ECS.income.balance_done', compact('balances'));
    }
}
