<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseRecordingController extends Controller
{
    const RECORDINGS = [
        4 => [
            7 => ['create_date' => '2020-02-01', 'created_by' => '社工A'],
            6 => ['create_date' => '2020-01-15', 'created_by' => '社工A'],
            5 => ['create_date' => '2020-01-03', 'created_by' => '社工A'],
        ],
        3 => [
            4 => ['create_date' => '2020-01-18', 'created_by' => '社工B'],
            3 => ['create_date' => '2020-01-02', 'created_by' => '社工B'],
        ],
        2 => [
            2 => ['create_date' => '2020-02-05', 'created_by' => '社工A'],
        ],
        1 => [
            1 => ['create_date' => '2020-01-18', 'created_by' => '社工C'],
        ],
    ];

    public function __construct()
    {
        View::share('recordings', self::RECORDINGS);
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
