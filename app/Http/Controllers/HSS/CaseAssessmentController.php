<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseAssessmentController extends Controller
{
    const CASE_ASSESSMENTS = [
        4 => [
            ['assessment_number' => 3, 'assessment_id' => 7, 'create_date' => '2020-02-01', 'created_by' => '社工A'],
            ['assessment_number' => 2, 'assessment_id' => 6, 'create_date' => '2020-01-15', 'created_by' => '社工A'],
            ['assessment_number' => 1, 'assessment_id' => 5, 'create_date' => '2020-01-03', 'created_by' => '社工A'],
        ],
        3 => [
            ['assessment_number' => 2, 'assessment_id' => 4, 'create_date' => '2020-01-18', 'created_by' => '社工B'],
            ['assessment_number' => 1, 'assessment_id' => 3, 'create_date' => '2020-01-02', 'created_by' => '社工B'],
        ],
        2 => [
            ['assessment_number' => 1, 'assessment_id' => 2, 'create_date' => '2020-02-05', 'created_by' => '社工A'],
        ],
        1 => [
            ['assessment_number' => 1, 'assessment_id' => 1, 'create_date' => '2020-01-18', 'created_by' => '社工C'],
        ],
    ];
    const OPTIONS = [
        0 => [
            'source' => ['照顧使用者', '家人或親屬'],
            'assessment_method' => ['家訪', '辦公室', '電話', '其他註明']
        ],
        1 => [
            ['field' => 'address', 'name' => '地址', 'opts' => ['有', '沒有']],
            ['field' => 'phone', 'name' => '電話', 'opts' => ['有', '沒有']],
            ['field' => 'emergency_contact', 'name' => '緊急聯絡人資料', 'opts' => ['有', '沒有']],
            ['field' => 'marriage_status', 'name' => '婚姻狀況', 'opts' => ['有', '沒有']],
            ['field' => 'group', 'name' => '服務使用者組別', 'opts' => ['有', '沒有']],
            ['field' => 'living_status', 'name' => '居住狀況', 'opts' => ['有', '沒有']],
            ['field' => 'financial_status', 'name' => '經濟狀況', 'opts' => ['有', '沒有']],
            ['field' => 'health_status', 'name' => '健康狀況', 'opts' => ['有', '沒有']],
            ['field' => 'not_formal_support', 'name' => '非正式支援系統', 'opts' => ['有', '沒有']],
            ['field' => 'formal_support', 'name' => '正式支援系統', 'opts' => ['有', '沒有']],
            ['field' => 'supplementary_info', 'name' => '其他補充資料', 'opts' => ['有', '沒有']],
        ],
    ];

    public function __construct()
    {
        View::share('case_assessments', self::CASE_ASSESSMENTS);
    }

    public function index($case_id)
    {
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        $case_assessments = self::CASE_ASSESSMENTS[$case_id];
        return view('HSS.case_assessment.index', compact('case_id', 'case', 'case_assessments'));
    }

    public function create(Request $request)
    {
        $case_id = $request->get('case_id');
        $options = self::OPTIONS;
        return view('HSS.case_assessment.create', compact('case_id', 'options'));
    }

    public function edit($assessment_id)
    {
        return view('HSS.case_assessment.edit');
    }
}
