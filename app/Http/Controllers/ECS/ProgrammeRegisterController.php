<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgrammeRegisterController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];
    const MEMBERSHIPS = [
        1 => '長者會員',
        2 => '長者會員(綜援)',
        3 => '驕陽會員',
        4 => '護老者',
        5 => '義工',
        6 => '非會員'
    ];
    /*
    const REGISTERS = [
        1 => [
            'programme_id' => 1,
            'member_code' => '03ELS300805',
            'member_name' => '葉問',
            'mobile' => '95959595',
            'create_date' => '2021-01-04',
            'status' => 'C',
            'payment_method' => 'CASH'
        ]
    ];
    */
    const REGISTERS = [
        10 => [
            'register_id' => 10, 'invoice' => 'A0000012', 'member_code' => '03EL300102', 'member_name' => '陳永仁',
            'member_eng_name' => 'Chan Wing Yan', 'gender' => 'M',
            'mobile' => '98989898', 'create_date' => '2021-01-05', 'status' => 'A', 'payment_method' => '現金',
            'coupon' => '', 'fee' => '100.0'
        ],
        9 => [
            'register_id' => 9, 'invoice' => 'A0000011', 'member_code' => '03ELS300805', 'member_name' => '劉健明',
            'member_eng_name' => 'Lau Kin Ming', 'gender' => 'MM',
            'mobile' => '96969696', 'create_date' => '2021-01-04', 'status' => 'A', 'payment_method' => '現金',
            'coupon' => '20', 'fee' => '80.0'
        ],
        8 => [
            'register_id' => 8, 'invoice' => 'A0000010', 'member_code' => '03ELS300260', 'member_name' => '葉問',
            'member_eng_name' => 'Yip Man', 'gender' => 'M',
            'mobile' => '95959595', 'create_date' => '2021-01-04', 'status' => 'C', 'payment_method' => '現金',
            'coupon' => '', 'fee' => '100.0'
        ]
    ];

    const REGISTER_STATUSES = [
        'A' => '有效', 'C' => '已取消'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('registers', self::REGISTERS);
        View::share('register_statuses', self::REGISTER_STATUSES);
    }

    public function show(Request $request, $register_id)
    {
        $programme_id = $request->get('programme_id');
        $register = self::REGISTERS[$register_id];
        return view('ECS.programme_register.show', compact('programme_id', 'register'));
    }

    public function create(Request $request)
    {
        return view('ECS.programme_register.create');
    }

    public function createMultiple(Request $request)
    {
        return view('ECS.programme_register.create_multiple');
    }

    public function cancel(Request $request)
    {
        return view('ECS.programme_register.cancel');
    }

    public function report()
    {
        $report = [
            [
                'code' => 'J3C18032',
                'name' => '中秋月餅慶團圓',
                'date' => ['2021-03-14'],
                'count1' => 10,
                'count2' => 5,
                'count3' => 3,
                'register_count' => 18,
                'refund_count' => 1,
                'lesson_count' => 1,
                'attendance_count' => 18,
                'indicator' => 3.3,
                'contact_person' => '簡文標',
                'fee' => 820
            ],
            [
                'code' => 'J3A18111',
                'name' => '健腦操02',
                'date' => ['2021-03-12','2021-03-19','2021-03-26'],
                'count1' => 24,
                'count2' => 5,
                'count3' => 0,
                'register_count' => 29,
                'refund_count' => 0,
                'lesson_count' => 3,
                'attendance_count' => 87,
                'indicator' => 3.1,
                'contact_person' => '鄧英琪',
                'fee' => 1450
            ],
            [
                'code' => 'J3A18107',
                'name' => '自強運動02',
                'date' => ['2021-03-11','2021-03-13','2021-03-18','2021-03-20','2021-03-27'],
                'count1' => 33,
                'count2' => 6,
                'count3' => 1,
                'register_count' => 40,
                'refund_count' => 0,
                'lesson_count' => 5,
                'attendance_count' => 198,
                'indicator' => 3.1,
                'contact_person' => '容淑儀',
                'fee' => 4000
            ],
        ];
        return view('ECS.programme_register.report', compact('report'));
    }

    public function export(Request $request)
    {
        $programme_id = $request->get('programme_id');
        return view('ECS.programme_register.export');
    }

    public static function getRegisters(): array
    {
        return self::REGISTERS;
    }

    public static function getRegisterStatuses(): array
    {
        return self::REGISTER_STATUSES;
    }

//    public function edit(Request $request)
//    {
//        return view('ECS.programme_register.edit');
//    }
}
