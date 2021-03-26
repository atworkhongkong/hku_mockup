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
    const TRAININGS = [
        1 => ['hour' => 35, 'default_hour' => 56],
        2 => ['hour' => 62, 'default_hour' => 74],
        3 => ['hour' => 28, 'default_hour' => 56],
        4 => ['hour' => 59, 'default_hour' => 74],
        5 => ['hour' => 65, 'default_hour' => 74],
    ];
    const BASIC = ['phone contact', 'interview', 'home visit', 'group training', 'others'];
    const TRANSPORTS = [
        'PLB', 'Taxi', 'Kwoon Chung', 'Walk', 'Other'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('cases', DCSSController::getCases());
        View::share('trainings', self::TRAININGS);
        View::share('basic', self::BASIC);
        View::share('transports', self::TRANSPORTS);
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

    public function edit(Request $request, $id)
    {
        $case_id = $request->get('case_id');
        return view('ECS.dcss_training.edit', compact('case_id', 'id'));
    }

    public function show($id)
    {
        $case = DCSSController::getCases()[$id];
        return view('ECS.dcss_training.show', compact('id', 'case'));
    }

    public function edit_icp($id)
    {
        $case = DCSSController::getCases()[$id];
        $all_suggest_hours = [
            'greater' => [
                'cognitive' => '18-20',
                'functioning' => '16-20',
                'psychosocial' => '12-16',
                'carer_burden' => '10-18'
            ],
            'lesser' => [
                'cognitive' => '18-20',
                'functioning' => '16-20',
                'psychosocial' => '12-16',
                'carer_burden' => '2-4'
            ]
        ];
        $suggest_hours = $all_suggest_hours[strtolower($case['burden'])];
        return view('ECS.dcss_training.edit_icp', compact('id', 'case', 'suggest_hours'));
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
