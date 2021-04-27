<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ECS\ProgrammeRegisterController;

class ProgrammeController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '南區長者綜合服務處',
        4 => '林應和長者鄰舍中心',
        5 => '方王換娣長者鄰舍中心'
    ];
    const PROGRAMME_SEASONS = [
        1 => '11/2020 - 2/2021',
        2 => '3/2021 - 5/2021',
        3 => '6/2021 - 9/2021',
    ];
    const TUTORS = [
        1 => ['tutor_id' => 1, 'code' => 'TR0001', 'name' => '黃岱丞'],
        2 => ['tutor_id' => 2, 'code' => 'TR0002', 'name' => '郭佳其'],
        3 => ['tutor_id' => 3, 'code' => 'TR0013', 'name' => '陳盈喬'],
        4 => ['tutor_id' => 4, 'code' => 'TR0034', 'name' => '陳依婷'],
    ];
    const PROGRAMMES = [
        1 => ['code' => 'JM30129', 'name' => '粵曲欣賞'],
        2 => ['code' => 'JM30130', 'name' => '親子天地'],
    ];



    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('programmes', self::PROGRAMMES);
        View::share('tutors', TutorController::getTutors());
        View::share('salary_types', ProgrammeTutorSalaryController::getSalaryTypes());
    }

    public static function getProgrammes(): array
    {
        return self::PROGRAMMES;
    }

    public function index(Request $request)
    {
        $area = $request->get('area');
        $keyword = $request->get('keyword');
        return view('ECS.programme.index', compact('area', 'keyword'));
    }

    public function create(Request $request)
    {
        return view('ECS.programme.create');
    }

    public function edit($programme_id)
    {
        return view('ECS.programme.edit', compact('programme_id'));
    }

    public function register($programme_id)
    {
        $registers = ProgrammeRegisterController::getRegisters();
        $register_statuses = ProgrammeRegisterController::getRegisterStatuses();
        return view('ECS.programme.register', compact('programme_id', 'registers', 'register_statuses'));
    }

    public function attendance($programme_id)
    {
        return view('ECS.programme_attendance.index', compact('programme_id'));
    }

    public function waitingList($programme_id)
    {
        $waiting_list = ProgrammeWaitingListController::getWaitingList();
        return view('ECS.programme_waiting_list.index', compact('programme_id', 'waiting_list'));
    }

    public function tutorSalary($programme_id)
    {
        $tutor_salaries = [];
        $total = 0;
        foreach(ProgrammeTutorSalaryController::getTutorSalaries() as $v) {
            if ($v['programme_id'] == $programme_id) {
                $tutor_salaries[] = $v;
                $total += $v['salary'];
            }
        }
        return view('ECS.programme_tutor_salary.index', compact('programme_id', 'tutor_salaries', 'total'));
    }
}
