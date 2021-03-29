<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseRecordingController extends Controller
{
    const RECORDINGS = [
        4 => [
            7 => ['create_date' => '2020-02-01', 'created_by' => '社工A', 'recording_type' => 'case'],
            6 => ['create_date' => '2020-01-15', 'created_by' => '社工A', 'recording_type' => 'case'],
            5 => ['create_date' => '2020-01-03', 'created_by' => '社工A', 'recording_type' => 'case'],
        ],
        3 => [
            4 => ['create_date' => '2020-01-18', 'created_by' => '社工B', 'recording_type' => 'case'],
            3 => ['create_date' => '2020-01-02', 'created_by' => '社工B', 'recording_type' => 'case'],
        ],
        2 => [
            2 => ['create_date' => '2020-02-05', 'created_by' => '社工A', 'recording_type' => 'referral'],
        ],
        1 => [
            1 => ['create_date' => '2020-01-18', 'created_by' => '社工C', 'recording_type' => 'referral'],
        ],
    ];
    const RECORDING_TYPES = [
        'case' => '個案紀錄', 'referral' => '轉介紀錄'
    ];

    public function __construct()
    {
        View::share('recordings', self::RECORDINGS);
        View::share('recording_types', self::RECORDING_TYPES);
    }

    public function index($case_id)
    {
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        $recordings = self::RECORDINGS[$case_id];
        return view('HSS.case_recording.index', compact('case_id', 'case', 'recordings'));
    }

    public function create(Request $request)
    {
        $case_id = $request->get('case_id');
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        return view('HSS.case_recording.create', compact('case_id', 'case'));
    }

    public function edit(Request $request, $recording_id)
    {
        $case_id = $request->get('case_id');
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        $recording = self::RECORDINGS[$case_id][$recording_id];
        return view('HSS.case_recording.edit', compact('case_id', 'recording', 'case'));
    }
}
