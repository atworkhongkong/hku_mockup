<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DCSSController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強地區長者中心',
        2 => '南區長者地區中心',
    ];
    const STATUSES = [
        'A' => '跟進中', 'I' => '已完結'
    ];
    const CASES = [
        1 => ['group' => 'J01', 'case_number' => 'JD2002G', 'burden' => 'Lesser', 'name' => '李雅辛', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A', 'assessor' => '黃紫瑩'],
        2 => ['group' => 'J01', 'case_number' => 'JD2003G', 'burden' => 'Greater', 'name' => '傅勝偉', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A', 'assessor' => '林秀如'],
        3 => ['group' => 'J01', 'case_number' => 'JD2005P', 'burden' => 'Lesser', 'name' => '李孟宸', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A', 'assessor' => '張子輝'],
        4 => ['group' => 'J02', 'case_number' => 'JD2007G', 'burden' => 'Greater', 'name' => '黃耿亨', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A', 'assessor' => '陳球大'],
        5 => ['group' => 'J02', 'case_number' => 'JD2010G', 'burden' => 'Greater', 'name' => '何南珠', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A', 'assessor' => '陳子軒'],
    ];

    const LANGUAGES = ['廣東話', '國語', '英語', '其他方言'];
    const EDUCATIONAL_LEVELS = ['文盲', '略懂字', '小學', '中學', '大專或以上'];
    const MARRIAGE_STATUSES = ['獨身', '已婚', '離婚', '喪偶'];
    const HOME_TYPES = ['公屋', '居屋', '私人樓', '長者屋', '其他'];
    const ECONOMIC_STATUSES = ['儲蓄', '生果金', '綜援', '長者生活津', '傷殘津貼', '家人供養', '退休金', '經濟困難', '其他'];
    const RELIGIONS = ['天主教', '基督教', '佛教', '道教', '伊斯蘭教', '沒有信仰'];
    const ENVIRONMENTAL_OBSTACLES = ['沒有', '缺乏電梯', '斜路', '梯級', '其他'];
    const FAMILY_MEMBERS = ['沒有', '配偶', '子女', '傭人', '其他'];
    const LIVING_ARRANGEMENTS = ['獨自居住', '日間獨留在家中', '夜間獨留在家中', '經常有人陪伴'];
    const SERVICE_ACCEPTED = ['沒有', '有'];

    const DISEASE = [
        '高血壓', '低血壓', '氣管病', '心臟病', '關節炎', '糖尿病', '痛風', '腎病', '柏金遜症', '中風',
        '癌症', '白內障', '青光眼', '視網膜病變', '近視', '遠視', '老花', '精神病', '其他補充資料'
    ];
    const DOCTOR_SPECIALIST = ['內科', '老人科', '老人精神科(醫院)', '老人精神科(診所)'];
    const PHYSIQUE = ['正常', '瘦弱', '肥胖', '過度肥胖'];
    const FACE = ['正常', '蒼白', '潮紅', '灰暗'];
    const SKIN = ['正常', '乾燥', '水腫位置', '紅疹位置'];
    const VISION = ['可自理', '配戴眼鏡', '熟悉環境中安全', '弱視（左）', '弱視（右）', '失明（左）', '失明（右）'];
    const HEARING = ['正常', '配戴助聽器', '弱聽（左）', '弱聽（右）', '失聰（左）', '失聰（右）'];
    const TOOTH = ['健康', '少牙', '無牙', '假牙（上顎）', '假牙（下顎）', '可移動', '固定'];
    const DIET = ['正常餐', '碎餐', '糊餐'];
    const FOOD_ALLERGY = ['沒有', '有'];
    const APPETITE = ['正常', '過多', '過少 ', '小食多餐', '飲食習慣', '營養補充品'];
    const SMOKING = ['沒有', '有'];
    const BEER = ['沒有', '有'];
    const URINATION = ['正常', '尿頻', '排尿困難', '間歇失禁', '經常失禁'];
    const DEFECATION = ['正常', '便秘', '痔瘡', '間歇失禁', '經常失禁'];
    const DRUG_ALLERGY = ['沒有', '有'];

    const MOBILITY = ['活動自如（外出）', '活動自如（家中）', '輕扶家俱助行', '拐杖', '三腳叉', '四腳叉', '雨傘', '助行架', '四腳有轆架', '輪椅', '在旁輔助'];
    const TRANSFER = ['不需輔助', '需輔助'];
    const PAIN_LEVEL = ['沒有', '輕度', '中度', '嚴重'];
    const PAIN_FREQUENCY = ['很少', '間中', '經常', '特定時間', '其他'];
    const HAND_FOOT = ['正常', '軟弱', '截肢', '變形', '癱瘓'];
    const DEMENTIA = ['GDS', 'MCI', 'AD', 'VD', 'mixed', 'Lewy Body', '其他'];
    const SLEEP_CONDITION = ['正常', '嗜睡', '難以入睡', '淺睡', '早醒', '失眠', '補充'];
    const LOSE_DIRECTION = ['沒有', '時間', '地點', '人'];
    const BPSD = ['沒有', '煩躁', '攻擊性行為', '遊走', '飲食失調', '重覆現象', '走失', '憂鬱', '焦慮', '冷漠', '錯認人事', '妄想', '幻覺（聽 / 視）'];
    const LIVING_CONDITION = ['整潔', '雜亂', '其他', '需安裝扶手位置'];
    const INSTALL_PHONE = ['有安裝', '沒有安裝'];
    const SAFE_CLOCK = ['已安裝', '沒有安裝', '想安裝', '其他裝置'];

    const CARER = ['配偶', '外傭', '子', '女', '媳婦', '女婿', '孫', '其他'];
    const CARER_LIVE_WITH = ['同住', '不同住'];
    const CARER_MARRIAGE_STATUS = ['獨身', '已婚', '離婚', '喪偶'];
    const CARER_EDUCATIONAL_LEVEL = ['沒有接受教育', '小學', '中學', '大專或以上'];
    const CARER_ECONOMIC_STATUS = ['全職', '兼職', '退休', '家庭照顧者', '彈性工作'];
    const CARE_LENGTH = ['間中', '少於半天', '半天', '整天', '其他'];
    const SLEEP_ENOUGH = ['足夠', '不足但尚可', '嚴重不足', '失眠'];
    const NEED_CARER = ['否', '是'];
    const ASK_WHO = ['家人', '親屬', '社工/ 非牟利機構', '朋友', '鄰居', '宗教團體'];
    const DIFFICULTY = ['沒有困難', '照顧技巧及知識不足', '時間不敷應用', '沒有時間休息', '就照顧事情與家人意見不合', '與病患長者溝通困難、意見不合', '經濟困難', '不能兼顧其他事務', '自己身體轉差', '其他'];
    const NEED_ESCORT = ['不需要', '需要'];

    const ASSESS_METHOD = ['家訪', '中心面見', '其他'];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('statuses', self::STATUSES);
        View::share('cases', self::CASES);
        View::share('languages', self::LANGUAGES);
        View::share('educational_levels', self::EDUCATIONAL_LEVELS);
        View::share('marriage_statuses', self::MARRIAGE_STATUSES);
        View::share('home_types', self::HOME_TYPES);
        View::share('economic_statuses', self::ECONOMIC_STATUSES);
        View::share('religions', self::RELIGIONS);
        View::share('environmental_obstacles', self::ENVIRONMENTAL_OBSTACLES);
        View::share('family_members', self::FAMILY_MEMBERS);
        View::share('living_arrangements', self::LIVING_ARRANGEMENTS);
        View::share('service_accepted', self::SERVICE_ACCEPTED);

        View::share('disease', self::DISEASE);
        View::share('doctor_specialist', self::DOCTOR_SPECIALIST);
        View::share('physique', self::PHYSIQUE);
        View::share('face', self::FACE);
        View::share('skin', self::SKIN);
        View::share('vision', self::VISION);
        View::share('hearing', self::HEARING);
        View::share('tooth', self::TOOTH);
        View::share('diet', self::DIET);
        View::share('food_allergy', self::FOOD_ALLERGY);
        View::share('appetite', self::APPETITE);
        View::share('smoking', self::SMOKING);
        View::share('beer', self::BEER);
        View::share('urination', self::URINATION);
        View::share('defecation', self::DEFECATION);
        View::share('drug_allergy', self::DRUG_ALLERGY);

        View::share('mobility', self::MOBILITY);
        View::share('transfer', self::TRANSFER);
        View::share('pain_level', self::PAIN_LEVEL);
        View::share('pain_frequency', self::PAIN_FREQUENCY);
        View::share('hand_foot', self::HAND_FOOT);
        View::share('dementia', self::DEMENTIA);
        View::share('sleep_condition', self::SLEEP_CONDITION);
        View::share('lose_direction', self::LOSE_DIRECTION);
        View::share('bpsd', self::BPSD);
        View::share('living_condition', self::LIVING_CONDITION);
        View::share('install_phone', self::INSTALL_PHONE);
        View::share('safe_clock', self::SAFE_CLOCK);

        View::share('carer', self::CARER);
        View::share('carer_live_with', self::CARER_LIVE_WITH);
        View::share('carer_marriage_status', self::CARER_MARRIAGE_STATUS);
        View::share('carer_educational_level', self::CARER_EDUCATIONAL_LEVEL);
        View::share('carer_economic_status', self::CARER_ECONOMIC_STATUS);
        View::share('care_length', self::CARE_LENGTH);
        View::share('sleep_enough', self::SLEEP_ENOUGH);
        View::share('need_carer', self::NEED_CARER);
        View::share('ask_who', self::ASK_WHO);
        View::share('difficulty', self::DIFFICULTY);
        View::share('need_escort', self::NEED_ESCORT);

        View::share('assess_method', self::ASSESS_METHOD);
    }

    public function index()
    {
        return view('ECS.dcss.index');
    }

    public function create()
    {
        return view('ECS.dcss.create');
    }

    public function edit($case_id)
    {
        $case = self::CASES[$case_id];
        return view('ECS.dcss.edit', compact('case_id', 'case'));
    }

    public function report()
    {
        return view('ECS.dcss.report');
    }

    public static function getCases(): array
    {
        return self::CASES;
    }
}
