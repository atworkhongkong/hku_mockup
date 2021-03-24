<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class DCSSStaffTrainingController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強地區長者中心',
        2 => '南區長者地區中心',
    ];
    const STAFF_TRAININGS = [
        1 => ['staff_id' => 1, 'training_date' => '2021-03-24', 'training_hour' => 2, 'start_time' => '10:00', 'end_time' => '12:00', 'organizer' => '香港認知障礙症協會', 'activity_name' => '認知障礙症與認知刺激活動概念與設計'],
        2 => ['staff_id' => 1, 'training_date' => '2021-03-22', 'training_hour' => 2.5, 'start_time' => '9:00', 'end_time' => '11:30', 'organizer' => '香港認知障礙症協會', 'activity_name' => '認知障礙症與認知刺激活動概念與設計'],
        3 => ['staff_id' => 1, 'training_date' => '2021-03-18', 'training_hour' => 2, 'start_time' => '10:00', 'end_time' => '12:00', 'organizer' => '香港認知障礙症協會', 'activity_name' => '認知障礙症與認知刺激活動概念與設計'],
        4 => ['staff_id' => 2, 'training_date' => '2021-03-24', 'training_hour' => 2.5, 'start_time' => '9:00', 'end_time' => '11:30', 'organizer' => '香港認知障礙症協會', 'activity_name' => '認知障礙症與認知刺激活動概念與設計'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('staff_trainings', self::STAFF_TRAININGS);
        View::share('staff', DCSSStaffController::getStaff());
    }

    public function index()
    {
        $total_hour = $total_session = 0;
        foreach(self::STAFF_TRAININGS as $t) {
            $total_hour += $t['training_hour'];
        }
        $total_session = round($total_hour / 4, 2);
        return view('ECS.dcss_staff_training.index', compact('total_hour', 'total_session'));
    }

    public function create()
    {
        return view('ECS.dcss_staff_training.create');
    }

    public function edit($training_id)
    {
        $staff_training = self::STAFF_TRAININGS[$training_id];
        return view('ECS.dcss_staff_training.edit', compact('staff_training'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        if ($type) {
            $full_url = URL::full();
        } else {
            $type = 'training_session';
            $full_url = URL::full().'/'.$type;
        }
        return view('ECS.dcss_staff_training.report', compact('type', 'full_url'));
    }
}
