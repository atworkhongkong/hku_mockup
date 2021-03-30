<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseReassessmentController extends Controller
{
    const CASE_REASSESSMENTS = [
        4 => [
            7 => ['assessment_number' => 3, 'create_date' => '2020-01-01', 'created_by' => '社工A'],
            6 => ['assessment_number' => 2, 'create_date' => '2019-06-15', 'created_by' => '社工A'],
            5 => ['assessment_number' => 1, 'create_date' => '2019-01-04', 'created_by' => '社工A'],
        ],
        3 => [
            4 => ['assessment_number' => 2, 'create_date' => '2019-06-01', 'created_by' => '社工B'],
            3 => ['assessment_number' => 1, 'create_date' => '2019-01-10', 'created_by' => '社工B'],
        ],
        2 => [
            2 => ['assessment_number' => 1, 'create_date' => '2019-04-22', 'created_by' => '社工A'],
        ],
        1 => [
            1 => ['assessment_number' => 1, 'create_date' => '2019-02-15', 'created_by' => '社工C'],
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
        2 => [
            1 => '你多唔多與親戚/兒女聯絡?',
            2 => '你多唔多與朋友/鄰居聯絡?',
            3 => '你多唔多參與社區活動?(如老人中心/互委會)',
            4 => '當你需要協助時，親戚/兒女能否提供協助?',
            5 => '當你需要協助時，朋友/鄰居能否提供協助?',
        ],
        3 => [
            1 => '你覺得自己有沒有記憶問題?',
            2 => '你多唔多憂慮? (如擔心健康、經濟等)',
            3 => '你是否時常感到開心呢?',
            4 => '你是否覺得自己的境況比其他同年齡的人好?',
            5 => '你是否覺得自己的心情時常輕鬆?',
            6 => '你有幾接受自己的外觀?',
        ],
        4 => [
            1 => '食藥 (適當時間食適當藥物，包括注射)',
            2 => '準備膳食',
            3 => '對外溝通 (用電或親自見面保持與外界接觸)',
            4 => '洗衣服 (清洗及弄乾衣服，不論手洗或2用洗衣機洗)',
            5 => '處理家務 (進行家務，如掉拉圾、清潔、掃地、洗地等)',
            6 => '出外 (外出附近地方，或乘搭交通工具到較遠的地方)',
            7 => '財物管理 (處理自己財物，如日常買賣、每月結賬等)',
            8 => '購物 (知道要買什麼，在哪裡買，買到貨物及將它帶返屋企)',
        ],
        5 => [
            1 => '進食 (包括任何攝取營養的方法，如管灌餵食)',
            2 => '個人衛生 (包括梳頭、刷牙、洗臉、洗手)',
            3 => '穿衣服 (穿脫上身及下身衣服)',
            4 => '轉移位置 (包括任何在兩個平面，如床、椅子、輪椅之間的移動)',
            5 => '排便 (排便抑制情況)',
            6 => '排尿 (排尿抑制情況)',
            7 => '如廁 (包括便用廁所，如尿器、便器，在廁所間移動、清潔、更換尿片、整理衣裝)',
            8 => '洗澡 (包括清洗身體各部份)',
            9 => '上落樓梯',
            10 => '行動 (如困坐輪椅，可以在輪椅的青現為準)',
        ],
    ];

    public function __construct()
    {
        View::share('case_reassessments', self::CASE_REASSESSMENTS);
        View::share('options', self::OPTIONS);
    }

    public function index($case_id)
    {
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        $case_reassessments = self::CASE_REASSESSMENTS[$case_id];
        return view('HSS.case_reassessment.index', compact('case_id', 'case', 'case_reassessments'));
    }

    public function create(Request $request)
    {
        $case_id = $request->get('case_id');
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        return view('HSS.case_reassessment.create', compact('case_id', 'case'));
    }

    public function edit(Request $request, $reassessment_id)
    {
        $case_id = $request->get('case_id');
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        $case_reassessments = self::CASE_REASSESSMENTS[$case_id];
        $reassessment = self::CASE_REASSESSMENTS[$case_id][$reassessment_id];
        /*
        $reassessment = array_filter($case_reassessments, function($item) use ($reassessment_id) {
            return $item['reassessment_id'] == $reassessment_id;
        });
        $reassessment = array_values($reassessment)[0];
        */
        return view('HSS.case_reassessment.edit', compact('case_id', 'case', 'reassessment'));
    }
}
