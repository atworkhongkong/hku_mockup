<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgrammeTutorSalaryController extends Controller
{
    const TUTOR_SALARIES = [
        1 => ['id' => 1, 'programme_id' => 1, 'tutor_id' => 1, 'salary' => 4000, 'salary_type' => '全期', 'done' => 0],
        2 => ['id' => 2,'programme_id' => 1, 'tutor_id' => 2, 'salary' => 3000, 'salary_type' => '全期', 'done' => 0],
        3 => ['id' => 3,'programme_id' => 2, 'tutor_id' => 1, 'salary' => 2800, 'salary_type' => '全期', 'done' => 0],
        4 => ['id' => 4,'programme_id' => 2, 'tutor_id' => 3, 'salary' => 3200, 'salary_type' => '全期', 'done' => 0],
        5 => ['id' => 5,'programme_id' => 2, 'tutor_id' => 4, 'salary' => 1600, 'salary_type' => '全期', 'done' => 0],
    ];
    const SALARY_TYPES = [
        '每小時', '每人', '每堂', '全期', '分帳'
    ];

    public function __construct()
    {
        View::share('programmes', ProgrammeController::getProgrammes());
        View::share('tutors', TutorController::getTutors());
    }

    public static function getTutorSalaries(): array
    {
        return self::TUTOR_SALARIES;
    }

    public static function getSalaryTypes(): array
    {
        return self::SALARY_TYPES;
    }

    /*
    public function index()
    {
        return view('ECS.programme_tutor_salary.index');
    }
    */
    public function create($programme_id)
    {
        $salary_types = self::SALARY_TYPES;
        return view('ECS.programme_tutor_salary.create', compact('programme_id', 'salary_types'));
    }

    public function edit($salary_id)
    {
        $salary_types = self::SALARY_TYPES;
        $tutor_salaries = self::TUTOR_SALARIES;
        $tutor_salary = $tutor_salaries[$salary_id];
        $programme_id = $tutor_salary['programme_id'];
        return view('ECS.programme_tutor_salary.edit', compact('tutor_salary', 'programme_id', 'salary_types'));
    }

    public function contrast($salary_id)
    {
        return view('ECS.programme_tutor_salary.contrast');
    }
}
