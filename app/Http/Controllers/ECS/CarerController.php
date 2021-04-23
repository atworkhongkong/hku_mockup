<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarerController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王換娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const CARERS = [
        1 => ['code' => 'J00001', 'name' => '黃柏宇', 'target' => '李雅辛', 'type' => '護老者', 'status' => 'A', 'center' => 1, 'create_date' => '2020-12-08'],
        2 => ['code' => 'J00002', 'name' => '詹晏靖', 'target' => '傅勝偉', 'type' => '護老者', 'status' => 'A', 'center' => 1, 'create_date' => '2020-06-15'],
        3 => ['code' => 'J00003', 'name' => '楊智盈', 'target' => '李孟宸', 'type' => '護老者', 'status' => 'A', 'center' => 1, 'create_date' => '2020-01-12'],
        4 => ['code' => 'J00004', 'name' => '廖怡秀', 'target' => '黃耿亨、莫惠婷', 'type' => '護老者', 'status' => 'A', 'center' => 1, 'create_date' => '2019-11-01'],
        5 => ['code' => 'J00005', 'name' => '王瑜育', 'target' => '傅勝偉', 'type' => '有需要護老者', 'status' => 'I', 'center' => 1, 'create_date' => '2019-08-18'],
        6 => ['code' => 'J00006', 'name' => '蕭育紹', 'target' => '何南珠', 'type' => '有需要護老者', 'status' => 'A', 'center' => 1, 'create_date' => '2019-05-27']
    ];

    const STATUSES = [
        'A' => '有效',
        'I' => '暫停'
    ];

    const FROM2_CB = [
        '家人/親屬', '社工/社會福利機構', '醫護人員', '朋友', '鄰居', '宗教團體', '其他'
    ];

    const FORM3_CB = [
        '個人護理 (餵食、洗澡、換尿片、體位轉移、如廁、藥物管理)',
        '基本護理 (如量血壓、打針、驗尿)',
        '護送 (醫院覆診、到長者中心)',
        '運動 (戶外、戶內)',
        '購物 (購買日用品、代取藥、預約覆診)',
        '財物管理',
        '膳食安排',
        '家居購物',
        '家居清潔、洗衣、打掃',
        '決定日常事務',
        '處理行為問題',
        '情緒支援',
        '其他',
    ];

    const FROM4_CB = [
        '接收護老資訊刊物 (給護老者)', '義工深訪', '護老者訓練', '復康器材借用 (如輪椅、助行架)', '電話慰問', '外傭訓練', '購物優惠 (如尿片、奶粉)',
        '暫托服務', '善終服務', '社交活動 (如旅行、荼聚)', '短暫到戶/中心看顧', '護送服務', '其他'
    ];

    const FORM5_CB_1 = [
        '工作收入', '高齡津貼', '者生活津/高額長者生活津貼', '退休金/長俸', '儲蓄', '傷殘/高額傷殘津貼', '子女/親屬供養', '綜援', '其他'
    ];

    const FORM5_CB_2 = [
        '長者中心會員', '已入住院舍', '長者日間護理中心服務', '綜合家居照顧服務(普通)/家務助理服務', '改善長者家居及社區照顧服務/綜合家居照顧服務(體弱)', '其他'
    ];

    const FORM5_CB_3 = [
        '輪候院舍', '其他'
    ];

    const FORM5_CB_4 = [
        '心臟病','柏金遜症','腎病','關節炎','高血壓','認知障礙症','抑鬱症','骨質巰鬆症','糖尿病','失聰/部份失聰','氣管/肺病','中風','癌症', '眼疾', '其他'
    ];

    const FORM5_CB_5 = [
        '行動自如', '雨傘/枴杖', '四腳叉/肋行架', '輪椅', '長期臥床'
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $carers = self::CARERS;
        $statuses = self::STATUSES;
        $form4_cb = self::FROM4_CB;
        $form5_cb_4 = self::FORM5_CB_4;
        return view('ECS.carer.index', compact('centers', 'carers', 'statuses', 'form4_cb', 'form5_cb_4'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        $statuses = self::STATUSES;
        $form2_cb = self::FROM2_CB;
        $form3_cb = self::FORM3_CB;
        $form4_cb = self::FROM4_CB;
        $form5_cb_1 = self::FORM5_CB_1;
        $form5_cb_2 = self::FORM5_CB_2;
        $form5_cb_3 = self::FORM5_CB_3;
        $form5_cb_4 = self::FORM5_CB_4;
        $form5_cb_5 = self::FORM5_CB_5;
        return view('ECS.carer.create', compact('centers', 'statuses', 'form2_cb', 'form3_cb', 'form4_cb', 'form5_cb_1', 'form5_cb_2', 'form5_cb_3', 'form5_cb_4', 'form5_cb_5'));
    }

    public function edit($carer_id)
    {
        $centers = self::CENTERS;
        $statuses = self::STATUSES;
        $carer = self::CARERS[$carer_id];

        $form2_cb = self::FROM2_CB;
        $form3_cb = self::FORM3_CB;
        $form4_cb = self::FROM4_CB;
        $form5_cb_1 = self::FORM5_CB_1;
        $form5_cb_2 = self::FORM5_CB_2;
        $form5_cb_3 = self::FORM5_CB_3;
        $form5_cb_4 = self::FORM5_CB_4;
        $form5_cb_5 = self::FORM5_CB_5;

        return view('ECS.carer.edit', compact('centers', 'carer', 'statuses', 'carer_id', 'form2_cb', 'form3_cb', 'form4_cb', 'form5_cb_1', 'form5_cb_2', 'form5_cb_3', 'form5_cb_4', 'form5_cb_5'));
    }

    public function report(Request $request)
    {
        $centers = self::CENTERS;
        $type = $request->get('type');
        $carers = self::CARERS;
        $statuses = self::STATUSES;
        return view('ECS.carer.report', compact('centers', 'type', 'carers', 'statuses'));
    }
}
