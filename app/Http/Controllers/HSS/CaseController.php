<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseController extends Controller
{
    const STATUSES = [
        'active' => '日常個案',
        'nsc' => '不成功個案',
        'not_process' => '申請未處理',
        'processing' => '申請處理中',
        'waiting_list' => '申請輪候中',
        'closed' => '結束個案',
    ];
    const MARRIAGE_STATUSES = ['獨身', '已婚', '離婚', '喪偶'];
    const EDUCATIONAL_LEVELS = ['文盲', '略懂字', '小學', '中學', '大專或以上'];
    const CASES = [
        1 => ['case_number' => '108259', 'name' => '李雅辛', 'gender' => 'M', 'dob' => '1945-02-08', 'create_date' => '2020-01-10', 'status' => 'active'],
        2 => ['case_number' => '108160', 'name' => '傅勝偉', 'gender' => 'M', 'dob' => '1942-12-25', 'create_date' => '2019-10-05', 'status' => 'active'],
        3 => ['case_number' => '108052', 'name' => '李孟宸', 'gender' => 'M', 'dob' => '1947-05-11', 'create_date' => '2019-10-02', 'status' => 'active'],
        4 => ['case_number' => '106058', 'name' => '何南珠', 'gender' => 'F', 'dob' => '1946-10-28', 'create_date' => '2019-08-08', 'status' => 'active'],
    ];

    public function __construct()
    {
        View::share('statuses', self::STATUSES);
        View::share('cases', self::CASES);
        View::share('marriage_statuses', self::MARRIAGE_STATUSES);
        View::share('education_levels', self::EDUCATIONAL_LEVELS);
    }

    public function index()
    {
        return view('HSS.case.index');
    }

    public function create()
    {
        return view('HSS.case.create');
    }

    public function edit()
    {
        return view('HSS.case.edit');
    }
}
