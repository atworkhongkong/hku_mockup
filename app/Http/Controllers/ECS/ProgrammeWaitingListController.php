<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgrammeWaitingListController extends Controller
{
    const WAITING_LIST = [
        1 => ['code' => '03EL300102', 'name' => '陳永仁', 'gender' => 'M', 'phone' => '98989898', 'create_date' => '2021-01-05'],
        2 => ['code' => '', 'name' => '劉健明', 'gender' => 'M', 'phone' => '96969696', 'create_date' => '2021-01-04'],
    ];

    public function __construct()
    {
        View::share('waiting_list', self::WAITING_LIST);
    }

    public static function getWaitingList(): array
    {
        return self::WAITING_LIST;
    }

    public function index($id)
    {
        return view('ECS.programme_waiting_list.index');
    }

    public function create($programme_id)
    {
        return view('ECS.programme_waiting_list.create', compact('programme_id'));
    }

    public function edit($waiting_id, Request $request)
    {
        $programme_id = $request->get('programme_id');
        return view('ECS.programme_waiting_list.edit', compact('programme_id', 'waiting_id'));
    }

    public function draw($programme_id)
    {
        $draw = [
            1 => ['member_code' => '03EL300102', 'name' => '陳永仁', 'gender' => 'M', 'phone' => '98989898', 'apply_date' => '2021-01-05', 'status' => 'not_confirm', 'lucky_date' => '2020-02-28'],
            2 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'M', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-01-08', 'status' => 'not_confirm', 'lucky_date' => '2020-02-28'],
            3 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'F', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-01-12', 'status' => 'confirmed', 'lucky_date' => '2020-02-28'],
            4 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'M', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-01-18', 'status' => 'confirmed', 'lucky_date' => '2020-02-28'],
            5 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'F', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-01-22', 'status' => 'cancel', 'lucky_date' => '2020-02-28'],
            6 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'F', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-01-29', 'status' => 'cancel', 'lucky_date' => '2020-02-28'],
            7 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'F', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-02-11', 'status' => 'confirmed', 'lucky_date' => '2020-02-28'],
            8 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'M', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-02-19', 'status' => 'waiting', 'lucky_date' => ''],
            9 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'M', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-02-20', 'status' => 'waiting', 'lucky_date' => ''],
            10 => ['member_code' => '03EL300xxx', 'name' => 'xxx', 'gender' => 'F', 'phone' => 'xxxxxxxx', 'apply_date' => '2021-02-25', 'status' => 'waiting', 'lucky_date' => ''],
        ];
        return view('ECS.programme_waiting_list.draw', compact('programme_id', 'draw'));
    }
}
