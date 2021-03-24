<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseController extends Controller
{
    const APPLICATION_METHODS = [1 => '熱線申請', 2 => '直接聯絡單位', 3 => '外界團體轉介'];
    const STATUSES = [
        'active' => '已開啟個案',
        'nsc' => '不成功個案',
        'not_process' => '申請未處理',
        'processing' => '申請處理中',
        'waiting_list' => '申請輪候中',
        'closed' => '結束個案',
    ];
    const MARRIAGE_STATUSES = ['獨身', '已婚', '離婚', '喪偶'];
    const EDUCATIONAL_LEVELS = ['文盲', '略懂字', '小學', '中學', '大專或以上'];
    const CASES = [
        4 => ['case_number' => '108259', 'name' => '李雅辛', 'gender' => 'M', 'dob' => '1945-02-08', 'create_date' => '2020-01-10', 'status' => 'active', 'sw' => '社工A'],
        3 => ['case_number' => '108160', 'name' => '傅勝偉', 'gender' => 'M', 'dob' => '1942-12-25', 'create_date' => '2019-10-05', 'status' => 'active', 'sw' => '社工B'],
        2 => ['case_number' => '108052', 'name' => '李孟宸', 'gender' => 'M', 'dob' => '1947-05-11', 'create_date' => '2019-10-02', 'status' => 'active', 'sw' => '社工A'],
        1 => ['case_number' => '106058', 'name' => '何南珠', 'gender' => 'F', 'dob' => '1946-10-28', 'create_date' => '2019-08-08', 'status' => 'active', 'sw' => '社工C'],
    ];
    const CLOSE_REASONS = [
        '自我照顧能力改善', '非家居照顧服務所能提供', '長期留醫', '已有人照顧', '與服務使用者失去聯絡', '服務使用者遷離服務地區範圍', '入住院舍',
        '服務使用者辭世', '服務使用者因收費原因自行放棄', '服務不能滿足服務使用者的需要/期望', '服務使用者不喜歡所提供的膳食', '其他'
    ];
    const CONDITIONS = [
        'A1' => [
            'title' => '申請人健康狀況︰(適用於申請膳食服務)',
            'choices' => [
                '申請人身體健康情況出現突然改變，因而影響日常自理能力。',
                '申請人因身體缺損，如視力不足或肢體傷殘，而未能自行準備膳食，或可能會因些而構成危險。',
                '申請人受活動能力所限，因而未能外出使用飯堂服務，或外出用膳。',
                '申請人認知能力缺損，因而未能自行準備膳食，或可能會因此構成危險。',
                '申請人精神健康欠佳，因而未能自行準備膳食，或可能會因此構成危險。',
                '申請人需進食特別餐，如糖尿餐、低普林餐，碎餐或糊餐，但未能自行準備有關膳食。',
            ],
            'extra_field' => []
        ],
        'A2' => [
            'title' => '申請人健康狀況︰(適用於申請膳食服務)',
            'choices' => [
                '申請人身體健康情況出現突然改變，因而影響日常自理能力。',
                '申請人因身體缺損，如視力不足或肢體傷殘，而未能自行準備膳食，或可能會因些而構成危險。',
                '申請人的健康狀況，如失禁、慢性阻塞性肺病、透析治療等，會因為提供家居清潔服務而得以紓緩或改善。',
                '申請人的輔助性日常生活(IADL)，需要其他人協助處理，但申請人未有相關支援。',
            ],
            'extra_field' => []
        ],
        'A3' => [
            'title' => '申請人健康狀況︰(適用於申請護送服務)',
            'choices' => [
                '申請人身體健康情況出現突然改變，因而影響日常自理能力。',
                '申請人因身體缺損，如視力不足或肢體傷殘，而行動能力亦受影響。',
                '申請人的輔助性日常生活(IADL)，需要其他人協助處理，但申請人未有相關支援。',
                '申請人需要使用輪椅。',
                '申請人未能自行使用公共交通工具。',
                '申請人需定期及頻密接受醫療檢查。',
                '申請人因語言隌礙或聽講能力欠佳，需要別人協助與醫護人員溝通。',
            ],
            'extra_field' => []
        ],
        'A4' => [
            'title' => '申請人健康狀況︰(適用於個人護理)',
            'choices' => [
                '申請人身體健康情況出現突然改變，因而影響日常個人護理能力。',
                '申請人因身體缺損，如視力不足或肢體傷殘，而個人護理能力亦受影響。',
                '申請人的健康狀況，如失禁、慢性阻塞性肺病、透析治療等，會因為提供個人護理服務而得以紓緩或改善。',
                '申請人的輔助性日常生活(IADL)，需要其他人協助處理，但申請人未有相關支援。'
            ],
            'extra_field' => []
        ],
        'A5' => [
            'title' => '申請人其他健康狀況︰',
            'choices' => [
                '',
            ],
            'extra_field' => [0]
        ],
        'B' => [
            'title' => '申請人家庭支援狀況︰',
            'choices' => [
                '申請人是獨居或兩老同住，沒有足夠支援。',
                '申請人與照顧者同住，但照顧者未能提供足夠支援。',
                '申請人並非與照顧者同住，因而未能提供足夠支援。',
                '照顧者身體情況出現突然改變，影響申請人原有的照顧安排及支援。',
                '申請人需二人或以上扶抱及照顧，而照顧者未能提供相關的支援。(只適用於申請個人照顧)',
                '其他',
            ],
            'extra_field' => [5]
        ],
        'C' => [
            'title' => '申請人居住/社區環境狀況︰',
            'choices' => [
                '申請人未能觸及需要進清潔的地方(例如高處)，或進行清潔時需搬移重物，對申請人的家居安全可能構成危險。(只適用於申請家居清潔)',
                '申請人家居衛生狀況對其健康或家居安全構成影響。(只適用於申請家居清潔)',
                '社區上未有其他可替代的支援、服務或資源。',
                '其他',
            ],
            'extra_field' => [3]
        ],
        'D' => [
            'title' => '除以上所列狀況外的其他補充資料︰',
            'choices' => [
                '',
            ],
            'extra_field' => [0]
        ],
    ];

    public function __construct()
    {
        View::share('application_methods', self::APPLICATION_METHODS);
        View::share('statuses', self::STATUSES);
        View::share('cases', self::CASES);
        View::share('marriage_statuses', self::MARRIAGE_STATUSES);
        View::share('education_levels', self::EDUCATIONAL_LEVELS);
        View::share('close_reasons', self::CLOSE_REASONS);
        View::share('conditions', self::CONDITIONS);
    }

    public function index()
    {
        return view('HSS.case.index');
    }

    public function create()
    {
        return view('HSS.case.create');
    }

    public function edit($case_id)
    {
        $case = self::CASES[$case_id];
        return view('HSS.case.edit', compact('case'));
    }

    public static function getCases(): array
    {
        return self::CASES;
    }
}
