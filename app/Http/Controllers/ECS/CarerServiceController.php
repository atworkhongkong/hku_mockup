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
        3 => '方王換娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const SERVICE_TYPES = [
        1 => '探訪',
        2 => '護送/陪診',
        3 => '短暫中心/到戶看顧',
        4 => '電話慰問',
        5 => '其他服務'
    ];

    const SERVICES = [
        4 => ['desc' => '探訪黃柏宇', 'service_type_id' => 1, 'service_date' => '2021-02-14', 'contact_person' => '同事A'],
        3 => ['desc' => '探訪詹晏靖', 'service_type_id' => 1, 'service_date' => '2021-02-11', 'contact_person' => '同事A'],
        2 => ['desc' => '石排灣探訪', 'service_type_id' => 1, 'service_date' => '2021-02-10', 'contact_person' => '同事A'],
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
        $type = empty($type) ? "nc_report" : $type;
        if ($type == "nc_report") {
            /*
            $services = [
                '04/2021' => ['purchase' => 3, 'rental' => 5, 'programme' => 8, 'phone' => 10],
                '05/2021' => ['purchase' => 2, 'rental' => 4, 'programme' => 3, 'phone' => 5],
            ];
            */
            $services1 = [
                1 => ['text' => '1) No. of support services in this month', 'data' => [29,23,3,'','','','','','','','','']],
                2 => ['text' => '2) Total No. of support services in this year', 'data' => [29,52,55,'','','','','','','','','']],
            ];

            $services2 = [
                1 => ['text' => '(i) No. of active needy carers b/f from (vii) last month', 'data' => [80,81,82,'','','','','','','','','']],
                2 => ['text' => '(ii) No. of new needy carer served in this month', 'data' => [3,1,1,'','','','','','','','','']],
                3 => ['text' => '(iii) No. of needy carer reactivated', 'data' => [0,0,0,'','','','','','','','','']],
                4 => ['text' => '(iv) No. of needy carers transfer in from carers', 'data' => [0,0,0,'','','','','','','','','']],
                5 => ['text' => '(v) No. of needy carers transfer out to carers', 'data' => [0,0,0,'','','','','','','','','']],
                6 => ['text' => '(vi) No. of needy carer no longer in need of support in this month', 'data' => [2,0,1,'','','','','','','','','']],
                7 => ['text' => '(vii) No. of active needy carers as at the end of this month (i)+(ii)+(iii)+(iv)-(v)-(vi)', 'data' => [81,82,82,'','','','','','','','','']],
            ];

            $services3 = [
                1 => ['text' => '(a) Volunteer visits', 'data' => [27,0,0,'','','','','','','','','']],
                2 => ['text' => '(b) Escort service', 'data' => [0,0,0,'','','','','','','','','']],
                3 => ['text' => '(c) Occasional elder sitting services', 'data' => [0,0,0,'','','','','','','','','']],
            ];

            return view('ECS.carer_service.nc_report', compact('type', 'services1', 'services2', 'services3'));
        } else if ($type == "oc_report") {
            $services = [
                1 => ['text' => '(i) No. of carers newly served (i)', 'data' => [14,43,12,'','','','','','','','','']],
                2 => ['text' => '(ii) No. of carers transfer in from needy carers', 'data' => [0,0,0,'','','','','','','','','']],
                3 => ['text' => '(iii) No. of carers transfer out to needy carers', 'data' => [0,0,0,'','','','','','','','','']],
                4 => ['text' => '(iv) No. of carers served for the month (i) + (ii) + (iii)', 'data' => [14,43,12,'','','','','','','','','']],
                5 => ['text' => '(v) Accumlated No. of carers served / Year-end total', 'data' => [14,57,69,'','','','','','','','','']],
            ];
            return view('ECS.carer_service.oc_report', compact('type', 'services'));
        }
    }
}
