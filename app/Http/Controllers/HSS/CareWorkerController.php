<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareWorkerController extends Controller
{
    const CARE_WORKERS = [
        '淑惠', '美玲', '雅婷', '美惠', '麗華', '淑娟', '淑貞', '怡君', '淑華', '慧妍',
        '婧琪', '璟雯', '夢婷', '雪怡', '可嵐', '天瑜', '婧琪', '雪馨', '雨婷', '雅芙',
        '羅蘭', '朱迪'
    ];

    public function index()
    {
        $care_workers = self::CARE_WORKERS;
        return view('HSS/care_worker/index', compact('care_workers'));
    }

    public function create()
    {
        return view('HSS/care_worker/create');
    }

    public function edit($id)
    {
        $name = self::CARE_WORKERS[$id - 1];
        return view('HSS/care_worker/edit', compact('name'));
    }
}
