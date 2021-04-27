<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HiddenElderlyController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '林應和長者鄰舍中心',
        4 => '方王換娣長者鄰舍中心'
    ];
    const HIDDEN_ELDERLY = [
        4 => ['name' => '陳希祥', 'district' => '石排灣', 'dob_year' => 1942, 'age' => 79, 'gender' => 'M', 'status' => 'A', 'center_id' => 1, 'create_date' => '2020-12-30'],
        3 => ['name' => '湯偉倫', 'district' => '鴨脷洲', 'dob_year' => 1935, 'age' => 86, 'gender' => 'M', 'status' => 'A', 'center_id' => 1, 'create_date' => '2020-10-18'],
        2 => ['name' => '林政城', 'district' => '黃竹坑', 'dob_year' => 1947, 'age' => 74, 'gender' => 'M', 'status' => 'A', 'center_id' => 1, 'create_date' => '2020-10-15'],
        1 => ['name' => '黃柏威', 'district' => '黃竹坑', 'dob_year' => 1949, 'age' => 72, 'gender' => 'M', 'status' => 'A', 'center_id' => 1, 'create_date' => '2020-09-24'],
    ];
    const STATUSES = [
        'A' => '現正跟進', 'C' => '已結束'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('hidden_elderly', self::HIDDEN_ELDERLY);
        View::share('statuses', self::STATUSES);
    }

    public function index()
    {
        return view('ECS.hidden_elderly.index');
    }

    public function create()
    {
        return view('ECS.hidden_elderly.create');
    }

    public function edit($id)
    {
        $hidden_elderly = self::HIDDEN_ELDERLY[$id];
        return view('ECS.hidden_elderly.edit', compact('hidden_elderly'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        if ($type == '') {
            $type = 'new';
        }
        $case_counts = ['new' => 3, 'accumulate' => 4, 'reactivate' => 1, 'close' => 2];
        return view('ECS.hidden_elderly.report', compact('type', 'case_counts'));
    }
}
