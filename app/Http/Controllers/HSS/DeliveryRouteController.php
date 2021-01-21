<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryRouteController extends Controller
{
    const DELIVERY_ROUTES = [
        1 => '海怡,西村,黃竹坑',
        2 => '石排灣',
        3 => '香港仔,漁光村,漁暉苑',
        4 => '鴨利洲大街,15間,日港居,漁安苑,利東',
        5 => '華富,華貴,田灣',
        6 => '中西區',
    ];

    public function index()
    {
        $delivery_routes = self::DELIVERY_ROUTES;

        return view('HSS/delivery_route/index', compact('delivery_routes'));
    }

    public function create()
    {
        return view('HSS/delivery_route/create');
    }

    public function edit($id)
    {
        $name = self::DELIVERY_ROUTES[$id];
        return view('HSS/delivery_route/edit', compact('name'));
    }
}
