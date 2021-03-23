<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CaseAssessmentController extends Controller
{
    const ASSESSMENTS = [
        4 => ['create_date' => '2019-01-05', 'created_by' => '社工A'],
        3 => ['create_date' => '2019-02-12', 'created_by' => '社工B'],
        2 => ['create_date' => '2018-06-15', 'created_by' => '社工A'],
        1 => ['create_date' => '2018-03-02', 'created_by' => '社工C'],
    ];
    const LIVING_STATUSES = [
        '獨居', '與配偶同住', '與子女同住', '與親戚同住', '與父母同住', '與朋友同住', '與其他人同住'
    ];
    const SECTION5a = [
        '健康良好', '肺病', '中風(左)', '中風(右)', '高血壓', '低血壓', '痛風症', '氣管病', '柏金遜病', '糖尿病',
        '關節炎', '心臟病', '老人癡呆症', '腎病', '眼疾(如白內障)', '皮膚病', '癌症', '失明', '部份失明', '失聰', '部份失聰',
        '肢體傷殘', '精神病', '其他'
    ];
    const SECTION5b = ['行動自如', '靠助行架', '靠四腳叉', '靠枴杖', '用輪椅', '要人扶行', '行動緩慢', '臥床', '其他'];
    const SECTION5c = ['最近有沒有跌倒/滑倒'];
    const SECTION6 = [
        '最近有無經常忘記自己剛剛做完的事情', '最新有無經常忘記親人及熟悉之朋友的名字', '最近有無試過迷路不懂回家'
    ];
    const SECTION7 = [
        '最新有無覺得唔開心，經常喊', '最近有無瞓唔到覺', '最近有無食慾下降，食唔到嘢，或體重下降', '最近有無經常投訴身體有痛或有毛病'
    ];
    const SECTION8 = [
        '你多唔多與親戚/兒女聯絡?', '你多唔多與朋友/鄰居聯絡?', '你多唔多參與社區活動? (如老人中心/互委會)', '當你需要協助時，親戚/兒女能否提無協助?', '當你需要協助時，朋友/鄰居能否提無協助?'
    ];
    const SECTION9 = [
        '你覺得自己有沒有記憶問題?', '你多唔多憂慮(如擔心健康、經濟)', '你是否時常感到開心呢?', '你是否覺得自己的境況比其他同年齡的人好?', '你是否覺得自己的心情時常輕鬆?', '你有幾接受自己的外觀?'
    ];
    const SECTION10a = [
        '體重突然驟降超過五磅', '最新有無食慾下降，食唔到嘢，或體重下降'
    ];
    const SECTION10b = [
        '餐類' => ['普通飯餐', '碎餐', '其他'],
        '特別餐' => ['糖尿餐', '高蛋白質', '低蛋白質', '低鹽餐', '薄血餐', '低普林餐', '其他'],
        '口腔問題' => ['沒有', '咀嚼問題', '吞嚥問題'],
        '營養問題' => ['無問題', '食慾不振']
    ];
    const SECTION11 = [
        '食藥(適當間食適當藥物，包括注射)', '準備膳食', '對外溝通(用電話或親自見面保持與外界接觸', '洗衣服(清洗及弄乾衣服，不論手洗或用洗衣機洗',
        '處理家務(進行家務，如掉垃圾、清潔、掃地、洗地等)', '出外(外出附近地方，或乘搭交通工具到較遠地方)',
        '財物管理(處理自己財物，如日常買賣、每月結賬等)', '購物(知道要買什麼，在哪裡買，買到貨物及將它帶返屋企)'
    ];
    const SECTION12 = [
        '進食(包括任何攝取營養的方法，如管灘餵食)', '個人衛生(包括梳頭、刷牙、洗面、洗手)', '穿衣服(穿脫上身及下身衣服)',
        '轉移位置 (包括任何在兩個平面，如床、椅子、輪椅之間的移動)', '排便 (排便抑制情況)', '排尿 (排尿抑制情況)',
        '如廁 (包括便用廁所，如尿器、便器，在廁所間移動、清潔、更換尿片、整理衣裝)', '洗澡 (包括清洗身體各部份)',
        '上落樓梯', '行動 (如困坐輪椅，可以在輪椅的青現為準)'
    ];
    const SECTION13 = [
        '視覺' => ['沒有困難', '輕度困難(左)', '輕度困難(右)', '喪失困難(左)', '喪失困難(右)'],
        '聽覺' => ['沒有困難', '輕度困難(左)', '輕度困難(右)', '喪失困難(左)', '喪失困難(右)'],
        '表達方式' => ['言語', '清晰', '含糊不清', '言語困難', '失語', '書寫', '手熱', '口形'],
        '認知能力' => ['正常', '有問題'],
        '情媎狀況' => ['平靜', '抑鬱', '惱怒', '焦慮'],
        '行為狀況' => ['正常', '混亂', '激動', '攻擊傾向'],
        '睡眠狀況' => ['沒有問題', '無法熟睡', '失眠'],
    ];
    const SECTION14 = [
        '小便' => ['正常', '偶有失禁', '失禁'],
        '大便' => ['正常', '偶有失禁', '失禁'],
        '理遺工具' => ['沒有', '大便椅', '便壺', '尿片', '其他'],
    ];
    const SECTION15a = [
        '鄰居', '親戚', '朋友', '其他'
    ];
    const SECTION15b = [
        '探訪', '協助購物', '護送', '其他'
    ];
    const SECTION16 = [
        '義工', '屒者支援服務隊', '長者地區中心', '長者日間護理中心', '家庭服務中心', '輔助服務', '日間醫院', '社康護理服務', '教會', '其他'
    ];
    const SECTION17 = [
        '平安鐘', '易達巴士', '護老者', '輪候院舍', '其他'
    ];
    const SECTION18 = [
        '送飯服務', '個人照顧', '護理照顧', '護送服務', '家居管理', '家庭暫托', '兒童看顧', '購物/遞送', '洗衣服務', '健康/安全', '其他'
    ];

    public function __construct()
    {
        View::share('living_statuses', self::LIVING_STATUSES);
        View::share('section5a', self::SECTION5a);
        View::share('section5b', self::SECTION5b);
        View::share('section5c', self::SECTION5c);
        View::share('section6', self::SECTION6);
        View::share('section7', self::SECTION7);
        View::share('section8', self::SECTION8);
        View::share('section9', self::SECTION9);
        View::share('section10a', self::SECTION10a);
        View::share('section10b', self::SECTION10b);
        View::share('section11', self::SECTION11);
        View::share('section12', self::SECTION12);
        View::share('section13', self::SECTION13);
        View::share('section14', self::SECTION14);
        View::share('section15a', self::SECTION15a);
        View::share('section15b', self::SECTION15b);
        View::share('section16', self::SECTION16);
        View::share('section17', self::SECTION17);
        View::share('section18', self::SECTION18);
    }

    public function edit($case_id)
    {
        $cases = CaseController::getCases();
        $case = $cases[$case_id];
        return view('HSS.case_assessment.edit', compact('case_id', 'case'));
    }
}
