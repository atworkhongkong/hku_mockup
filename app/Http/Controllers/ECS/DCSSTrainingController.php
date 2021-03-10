<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class DCSSTrainingController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強地區長者中心',
        2 => '南區長者地區中心',
    ];
    const CASES = [
        1 => ['case_id' => 1, 'group' => 'J01', 'case_number' => 'JD2002G', 'name' => '李雅辛', 'burden' => 'Lesser', 'hour' => 35, 'default_hour' => 56],
        2 => ['case_id' => 2, 'group' => 'J01', 'case_number' => 'JD2003G', 'name' => '傅勝偉', 'burden' => 'Greater', 'hour' => 62, 'default_hour' => 74],
        3 => ['case_id' => 3, 'group' => 'J01', 'case_number' => 'JD2005P', 'name' => '李孟宸', 'burden' => 'Lesser', 'hour' => 28, 'default_hour' => 56],
        4 => ['case_id' => 4, 'group' => 'J02', 'case_number' => 'JD2007G', 'name' => '黃耿亨', 'burden' => 'Greater', 'hour' => 59, 'default_hour' => 74],
        5 => ['case_id' => 5, 'group' => 'J02', 'case_number' => 'JD2010G', 'name' => '何南珠', 'burden' => 'Greater', 'hour' => 65, 'default_hour' => 74],
    ];
    const BASIC = ['phone contact', 'interview', 'home visit', 'group training', 'others'];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('cases', self::CASES);
        View::share('basic', self::BASIC);
    }

    public function index()
    {
        return view('ECS.dcss_training.index');
    }

    public function create(Request $request)
    {
        $id = $request->get('id');
        return view('ECS.dcss_training.create', compact('id'));
    }

    public function edit($id)
    {
        return view('ECS.dcss_training.edit');
    }

    public function show($id)
    {
        $case = self::CASES[$id];
        return view('ECS.dcss_training.show', compact('id', 'case'));
    }

    public function edit_icp($id)
    {
        $case = self::CASES[$id];
        return view('ECS.dcss_training.edit_icp', compact('case'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        if ($type) {
            $full_url = URL::full();
        } else {
            $type = 'individual';
            $full_url = URL::full().'/'.$type;
        }
        return view('ECS.dcss_training.report', compact('full_url', 'type'));
    }
}
