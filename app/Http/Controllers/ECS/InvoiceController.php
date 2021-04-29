<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class InvoiceController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];

    const INVOICES = [
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
            'invoice_status' => 'A',
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
            'invoice_status' => 'A',
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
            'invoice_status' => 'A',
            'url' => '/ecs/purchase/4/edit'
        ],
    ];

    const INCOME_TYPES = [
        1 => '會員續會',
        2 => '活動',
        3 => '購物',
        4 => '租借服務',
        5 => '飯餐',
    ];

    const INVOICE_STATUSES = [
        'A' => '有效', 'I' => '作癈'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('income_types', self::INCOME_TYPES);
        View::share('invoice_statuses', self::INVOICE_STATUSES);
    }

    public function index()
    {
        $invoices = self::INVOICES;
        return view('ECS.invoice.index', compact('invoices'));
    }

    public function show($invoice_id)
    {
        $result = array_filter(self::INVOICES, function($invoice) use ($invoice_id) {
            return $invoice['invoice'] == $invoice_id;
        });
        $result = array_values($result);
        $invoice = $result ? $result[0] : [];
        return view('ECS.invoice.show', compact('invoice'));
    }
}
