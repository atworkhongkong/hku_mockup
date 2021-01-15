<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function create()
    {
        return view('HSS/meal/create');
    }

    public function mealDelivery()
    {
        $max_care_worker = 20;
        $care_workers = [
            '淑惠', '美玲', '雅婷', '美惠', '麗華', '淑娟', '淑貞', '怡君', '淑華', '慧妍',
            '婧琪', '璟雯', '夢婷', '雪怡', '可嵐', '天瑜', '婧琪', '雪馨', '雨婷', '雅芙'
        ];
        $available_care_worker = 18;
        $delivery_routes = [
            1 => '海怡,西村,黃竹坑',
            2 => '石排灣',
            3 => '香港仔,漁光村,漁暉苑',
            4 => '鴨利洲大街,15間,日港居,漁安苑,利東',
            5 => '華富,華貴,田灣',
            6 => '中西區',
        ];
        $cw_delivery_counts = [];
        for ($i = 1 ; $i <= $max_care_worker ; $i++) {
            $cw_delivery_counts[$i] = mt_rand(1,7);
        }
        $max_service_users = 100;
        return view('HSS/meal/delivery', compact('care_workers', 'available_care_worker', 'delivery_routes', 'cw_delivery_counts', 'max_service_users'));
    }

    public function printMealDelivery()
    {
        return view('HSS/meal/delivery_print');
    }
}
