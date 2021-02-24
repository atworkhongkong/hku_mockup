<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HolidayController extends Controller
{
    const HOLIDAY = [
        1 => ['date' => '2021-01-01', 'desc' => '一月一日'],
        2 => ['date' => '2021-02-12', 'desc' => '農曆年初一'],
        3 => ['date' => '2021-02-13', 'desc' => '農曆年初二'],
        4 => ['date' => '2021-02-15', 'desc' => '農曆年初四'],
        5 => ['date' => '2021-04-02', 'desc' => '耶穌受難節'],
        6 => ['date' => '2021-04-03', 'desc' => '耶穌受難節翌日'],
    ];

    public function __construct()
    {
        View::share('holiday', self::HOLIDAY);
    }

    public function index()
    {
        return view('ECS.holiday.index');
    }

    public function create()
    {
        return view('ECS.holiday.create');
    }

    public function edit($id)
    {
        $h = self::HOLIDAY[$id];
        return view('ECS.holiday.edit', compact('h'));
    }
}
