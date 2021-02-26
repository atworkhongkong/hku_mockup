<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DCSSTrainingController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強地區長者中心',
        2 => '南區長者地區中心',
    ];
    const CASES = [
        1 => ['group' => 'J01', 'case_number' => 'JD2002G', 'name' => '李雅辛', 'burden' => 'Lesser', 'hour' => 35, 'default_hour' => 56],
        2 => ['group' => 'J01', 'case_number' => 'JD2003G', 'name' => '傅勝偉', 'burden' => 'Greater', 'hour' => 62, 'default_hour' => 74],
        3 => ['group' => 'J01', 'case_number' => 'JD2005P', 'name' => '李孟宸', 'burden' => 'Lesser', 'hour' => 28, 'default_hour' => 56],
        4 => ['group' => 'J02', 'case_number' => 'JD2007G', 'name' => '黃耿亨', 'burden' => 'Greater', 'hour' => 59, 'default_hour' => 74],
        5 => ['group' => 'J02', 'case_number' => 'JD2010G', 'name' => '何南珠', 'burden' => 'Greater', 'hour' => 65, 'default_hour' => 74],
    ];
    const BASIC = ['phone contact', 'interview', 'home visit', 'group training', 'others'];

    public function index()
    {
        View::share('centers', self::CENTERS);
        View::share('cases', self::CASES);
        return view('ECS.dcss_training.index');
    }

    public function create()
    {
        View::share('basic', self::BASIC);
        return view('ECS.dcss_training.create');
    }

    public function edit($id)
    {
        View::share('basic', self::BASIC);
        return view('ECS.dcss_training.edit');
    }

    public function show($id)
    {
        $case = self::CASES[$id];
        return view('ECS.dcss_training.show', compact('id', 'case'));
    }

    public function edit_icp()
    {
        return view('ECS.dcss_training.edit_icp');
    }

    public function report()
    {
        View::share('centers', self::CENTERS);
        View::share('cases', self::CASES);
        return view('ECS.dcss_training.report');
    }
}
