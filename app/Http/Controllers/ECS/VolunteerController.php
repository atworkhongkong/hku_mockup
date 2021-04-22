<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class VolunteerController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];
    const TEAMS = [
        1 => [1 => '耆樂大使', 2 => '智友伴', 3 => '共享綠田園', 4 => '老友記小組'],
        2 => [1 => '小組ABA', 2 => '小組ABB', 3 => '小組ABC'],
        3 => [1 => '小組BBA', 2 => '小組BBB', 3 => '小組BBC'],
        4 => [1 => '小組CBA', 2 => '小組CBB', 3 => '小組CBC'],
        5 => [1 => '小組DBA', 2 => '小組DBB', 3 => '小組DBC'],
    ];
    const VOLUNTEERS = [
        1 => [
            'name' => '黃柏宇',
            'center_id' => 1,
            'activeness' => [1 => 'A', 2 => 'I', 3 => 'I', 4 => 'I', 5 => 'I'],
            'team' => [1 => [1, 4], 2 => [1,3], 3 => [], 4 => [3], 5 => []],
            'register_date' => '2000-12-30',
            'recover_date' => '2020-11-25',
            'code' => 'VO100082',
            'grade' => 1,
            'STE' => 'STE'],
        2 => [
            'name' => '詹晏靖',
            'center_id' => 1,
            'activeness' => [1 => 'A', 2 => 'A', 3 => 'I', 4 => 'I', 5 => 'I'],
            'team' => [1 => [1, 2], 2 => [], 3 => [1], 4 => [], 5 => []],
            'register_date' => '2019-12-30',
            'recover_date' => '',
            'code' => 'VO100075',
            'grade' => 2,
            'STE' => 'STE'],
        3 => [
            'name' => '楊智盈',
            'center_id' => 1,
            'activeness' => [1 => 'A', 2 => 'A', 3 => 'I', 4 => 'I', 5 => 'I'],
            'team' => [1 => [1], 2 => [], 3 => [], 4 => [], 5 => []],
            'register_date' => '2018-08-26',
            'recover_date' => '',
            'code' => 'VO100063',
            'grade' => 1,
            'STE' => 'STE'],
        4 => [
            'name' => '廖怡秀',
            'center_id' => 1,
            'activeness' => [1 => 'I', 2 => 'I', 3 => 'A', 4 => 'A', 5 => 'A'],
            'team' => [1 => [2], 2 => [], 3 => [], 4 => [], 5 => []],
            'register_date' => '2018-08-01',
            'recover_date' => '',
            'code' => 'VO100050',
            'grade' => 1,
            'STE' => 'STE'],
        5 => [
            'name' => '王瑜育',
            'center_id' => 1,
            'activeness' => [1 => 'A', 2 => 'I', 3 => 'I', 4 => 'A', 5 => 'I'],
            'team' => [1 => [2, 3], 2 => [], 3 => [], 4 => [], 5 => []],
            'register_date' => '2018-06-18',
            'recover_date' => '',
            'code' => 'VO100048',
            'grade' => 1,
            'STE' => 'STE'
        ],
    ];
    const GRADES = [
        '新力軍', '基本', '進階', '資深', '領袖', '讚賢'
    ];
    const CAREERS = [
        '銀行/金融/地產', '政府/半政府/非牟利', '保險/公共事業機構', '飲食/美容/健美', '專業/醫療服務',
        '酒店/旅遊/運輸', '教育', '資訊科技/印刷/傳媒/娛樂', '貿易/製造業/零售/批發', '建造業/工程', '其他'
    ];
    const EDUCATIONS = [
        '小學', '初中', '高中', '大專或學位', '碩士或以上', '其他'
    ];
    const TIMES = [
        '星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期日', '上午', '下午', '晚上'
    ];
    const TARGETS = [
        '兒童及青少年', '成人及家庭', '社區服務', '長者服務', '獨特需要人士服務'
    ];
    const ACTIVENESS = [
        'A' => '活躍義工',
        'I' => '非活躍義工'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('grades', self::GRADES);
        View::share('careers', self::CAREERS);
        View::share('educations', self::EDUCATIONS);
        View::share('times', self::TIMES);
        View::share('targets', self::TARGETS);
        View::share('activeness', self::ACTIVENESS);
        View::share('teams', self::TEAMS);
    }

    public function index()
    {
        $volunteers = self::VOLUNTEERS;
        $edit_center_id = 1;
        return view('ECS.volunteer.index', compact('volunteers', 'edit_center_id'));
    }

    public function create()
    {
        return view('ECS.volunteer.create');
    }

    public function edit($id)
    {
        $volunteer = self::VOLUNTEERS[$id];
        $edit_center_id = 1;
        return view('ECS.volunteer.edit', compact( 'id','volunteer', 'edit_center_id'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        $full_url = URL::full();

        if ($type == 'new') {
            $count = 2;
        } else {
            $count = 4;
        }

        /*
        foreach(self::CENTERS as $c) {
            if ($type == 'new') {
                $counts[$c] = mt_rand(2, 10);
            } else {
                $counts[$c] = mt_rand(50, 80);
            }
        }
        */
        $volunteers = self::VOLUNTEERS;
        return view('ECS.volunteer.report', compact( 'type', 'full_url', 'count', 'volunteers'));
    }
}
