<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class VolunteerTeamController extends Controller
{
    const CENTERS = [
        '賽馬會黃志強長者地區中心', '南區長者地區中心', '南區長者綜合服務處', '林應和長者鄰舍中心', '方王煥娣長者鄰舍中心'
    ];
    const TEAMS = [
        1 => ['center_id' => 1, 'chi_name' => '耆樂大使', 'eng_name' => 'xxx', 'create_date' => '2020-01-31', 'contact_person' => '同事A', 'status' => 'A'],
        2 => ['center_id' => 1, 'chi_name' => '智友伴',  'eng_name' => 'yyy', 'create_date' => '2020-01-30', 'contact_person' => '同事B', 'status' => 'A'],
        3 => ['center_id' => 1, 'chi_name' => '老友記小組',  'eng_name' => 'zzz', 'create_date' => '2020-01-25', 'contact_person' => '同事C', 'status' => 'D'],
    ];
    const STATUSES = [
        'A' => '有效', 'I' => '無效', 'D' => '已解散'
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('teams', self::TEAMS);
        View::share('statuses', self::STATUSES);
    }

    public function index()
    {
        return view('ECS.volunteer_team.index');
    }

    public function create()
    {
        return view('ECS.volunteer_team.create');
    }

    public function edit($team_id)
    {
        $team = self::TEAMS[$team_id];
        return view('ECS.volunteer_team.edit', compact('team'));
    }
}
