<?php

namespace App\Http\Controllers\ECS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ECS\DCSSController;

class DCSSICPController extends Controller
{
    public function edit($id)
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
        return view('ECS.dcss_icp.edit', compact('id', 'case', 'suggest_hours'));
    }
}
