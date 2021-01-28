<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeRegisterController extends Controller
{
    const MEMBERSHIPS = [
        1 => '長者會員',
        2 => '長者會員(綜援)',
        3 => '驕陽會員',
        4 => '護老者',
        5 => '義工',
        6 => '非會員'
    ];

    public function index()
    {
        return view('ECS.programme_register.index');
    }

    public function create(Request $request)
    {
        return view('ECS.programme_register.create');
    }

    public function createMultiple(Request $request)
    {
        return view('ECS.programme_register.create_multiple');
    }

    public function edit(Request $request)
    {
        return view('ECS.programme_register.edit');
    }
}
