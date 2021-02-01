<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeWaitingListController extends Controller
{
    public function index($id)
    {
        return view('ECS.programme_waiting_list.index');
    }

    public function create($programme_id)
    {
        return view('ECS.programme_waiting_list.create');
    }

    public function edit($waiting_id)
    {
        return view('ECS.programme_waiting_list.edit');
    }

    public function draw($programme_id)
    {
        return view('ECS.programme_waiting_list.draw');
    }
}
