<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CarerServiceController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const SERVICE_TYPES = [
        1 => '探訪',
        2 => '護送',
        3 => '看護',
        4 => '其他服務'
    ];

    const SERVICES = [
        4 => ['desc' => '探訪黃柏宇', 'service_type_id' => 1, 'service_date' => '2021-02-14', 'contact_person' => '同事A'],
        3 => ['desc' => '探訪詹晏靖', 'service_type_id' => 1, 'service_date' => '2021-02-11', 'contact_person' => '同事A'],
        2 => ['desc' => '石排灣深訪', 'service_type_id' => 1, 'service_date' => '2021-02-10', 'contact_person' => '同事A'],
        1 => ['desc' => '探訪楊智盈', 'service_type_id' => 1, 'service_date' => '2021-02-02', 'contact_person' => '同事A'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('service_types', self::SERVICE_TYPES);
        View::share('services', self::SERVICES);
    }

    public function index()
    {
        return view('ECS.carer_service.index');
    }

    public function create()
    {
        return view('ECS.carer_service.create');
    }

    public function edit($id)
    {
        $service = self::SERVICES[$id];
        return view('ECS.carer_service.edit', compact('service'));
    }

    public function report(Request $request)
    {
        $type = $request->get('type');
        return view('ECS.carer_service.report', compact('type'));
    }
}
