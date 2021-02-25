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
        ['group' => 'J01', 'case_number' => 'JD2002G', 'name' => '李雅辛', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A'],
        ['group' => 'J01', 'case_number' => 'JD2003G', 'name' => '傅勝偉', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A'],
        ['group' => 'J01', 'case_number' => 'JD2005P', 'name' => '李孟宸', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A'],
        ['group' => 'J02', 'case_number' => 'JD2007G', 'name' => '黃耿亨', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A'],
        ['group' => 'J02', 'case_number' => 'JD2010G', 'name' => '何南珠', 'gender' => 'M', 'dob' => '1934-12-15', 'status' => 'A'],
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

    const DISEASES = [
        '高/低血壓', '氣管病', '心臟病', '關節炎', '糖尿病', '痛風', '腎病', '柏金遜症', '中風',
        '癌症', '視障（白內障 / 青光眼 / 視網膜病變 / 近視 /遠視 /老花）', '精神病', '其他補充資料'
    ];
    const DOCTOR_SPECIALIST = ['內科', '老人科', '老人精神科'];
    const PHYSIQUE = ['正常', '瘦弱', '肥胖', '過度肥胖'];


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
    }

    public function index()
    {
        return view('ECS.dcss.index');
    }

    public function create()
    {
        return view('ECS.dcss.create');
    }

    public function edit()
    {
        return view('ECS.dcss.edit');
    }

    public function report()
    {
        return view('ECS.dcss.report');
    }
}
