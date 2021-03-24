<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DCSSStaffController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強地區長者中心',
        2 => '南區長者地區中心',
    ];
    const STAFF = [
        1 => ['chi_name' => '李穎儀', 'eng_name' => 'Lee Wing Yee', 'email' => 'yee@aka.org.hk', 'post' => '社工', 'report_date'  => '2018-12-21'],
        2 => ['chi_name' => '陳頴霖', 'eng_name' => 'Chan Wing Lam', 'email' => 'lam@aka.org.hk', 'post' => '社工', 'report_date'  => '2016-10-12'],
        3 => ['chi_name' => '曾煒琛', 'eng_name' => 'Tsang Wei Sum', 'email' => 'sum@aka.org.hk', 'post' => '社工', 'report_date'  => '2018-02-05'],
        4 => ['chi_name' => '梁俊傑', 'eng_name' => 'Leung Chun Kit', 'email' => 'kit@aka.org.hk', 'post' => '社工', 'report_date'  => '2019-08-17'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('staff', self::STAFF);
    }

    public function index()
    {
        return view('ECS.dcss_staff.index');
    }

    public function create()
    {
        return view('ECS.dcss_staff.create');
    }

    public function edit($staff_id)
    {
        $staff_details = self::STAFF[$staff_id];
        return view('ECS.dcss_staff.edit', compact('staff_details'));
    }

    public static function getStaff(): array
    {
        return self::STAFF;
    }
}
