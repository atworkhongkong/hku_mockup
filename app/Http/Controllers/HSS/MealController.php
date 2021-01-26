<?php

namespace App\Http\Controllers\HSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
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
        return view('HSS/meal/index');
    }

    public function create()
    {
        $delivery_routes = self::DELIVERY_ROUTES;
        return view('HSS/meal/create', compact('delivery_routes'));
    }

    public function edit()
    {
        $delivery_routes = self::DELIVERY_ROUTES;
        return view('HSS/meal/edit', compact('delivery_routes'));
    }

    public function mealDelivery(Request $request)
    {
        $step = $request->get('step') ? $request->get('step') : 1;

        $max_care_worker = 20;
        $care_workers = [
            0 => ['name' => '淑惠', 'route_id' => 1],
            1 => ['name' => '美玲', 'route_id' => 1],
            2 => ['name' => '雅婷', 'route_id' => 1],
            3 => ['name' => '美惠', 'route_id' => 2],
            4 => ['name' => '麗華', 'route_id' => 2],
            5 => ['name' => '淑娟', 'route_id' => 2],
            6 => ['name' => '淑貞', 'route_id' => 3],
            7 => ['name' => '怡君', 'route_id' => 3],
            8 => ['name' => '淑華', 'route_id' => 3],
            9 => ['name' => '慧妍', 'route_id' => 4],
            10 => ['name' => '婧琪', 'route_id' => 4],
            11 => ['name' => '璟雯', 'route_id' => 4],
            12 => ['name' => '夢婷', 'route_id' => 5],
            13 => ['name' => '雪怡', 'route_id' => 5],
            14 => ['name' => '可嵐', 'route_id' => 5],
            15 => ['name' => '天瑜', 'route_id' => 6],
            16 => ['name' => '若琪', 'route_id' => 6],
            17 => ['name' => '雪馨', 'route_id' => 6],
            18 => ['name' => '雨婷', 'route_id' => 0],
            19 => ['name' => '雅芙', 'route_id' => 0],
            20 => ['name' => '羅蘭', 'route_id' => 0],
            21 => ['name' => '朱迪', 'route_id' => 0]
        ];
        $borrow_care_workers = [
            '月娥', '若驊'
        ];

        $route_care_worker_count = [];
        foreach($care_workers as $cw) {
            if (array_key_exists($cw['route_id'], $route_care_worker_count)) {
                $route_care_worker_count[$cw['route_id']] += 1;
            } else {
                $route_care_worker_count[$cw['route_id']] = 1;
            }
        }

        //$available_care_worker = 18;
        $delivery_routes = self::DELIVERY_ROUTES;
        /*
        $cw_delivery_counts = [];
        for ($i = 1 ; $i <= $max_care_worker ; $i++) {
            $cw_delivery_counts[$i] = mt_rand(1,7);
        }
        */
        $max_service_users = 100;
        $meal_users = $this->getMealUsers();
        return view('HSS/meal/delivery', compact( 'step','care_workers', 'borrow_care_workers', 'delivery_routes', 'max_service_users', 'route_care_worker_count', 'meal_users'));
    }

    public function printMealDelivery()
    {
        return view('HSS/meal/delivery_print');
    }

    private function getMealUsers(): array
    {
        return [
            1 => [
                ['estate' => '海怡', 'block' => '海昇', 'floor' => '3', 'room' => '6', 'number' => 'xxx|xxx', 'name' => '林婉秀'],
                ['estate' => '海怡', 'block' => '海昇', 'floor' => '5', 'room' => '8', 'number' => 'xxx|xxx', 'name' => '張美吟'],
                ['estate' => '海怡', 'block' => '海昇', 'floor' => '6', 'room' => '7', 'number' => 'xxx|xxx', 'name' => '曾淑娟'],
                ['estate' => '海怡', 'block' => '海暉', 'floor' => '7', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '林慧萍'],
                ['estate' => '海怡', 'block' => '海暉', 'floor' => '11', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '張哲妃'],
                ['estate' => '海怡', 'block' => '海暉', 'floor' => '15', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '陳逸能'],
                ['estate' => '海怡', 'block' => '海暉', 'floor' => '17', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '郭智翔'],
                ['estate' => '海怡', 'block' => '海逸', 'floor' => '21', 'room' => '8', 'number' => 'xxx|xxx', 'name' => '賴于倫'],
                ['estate' => '海怡', 'block' => '海逸', 'floor' => '22', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '楊敬典'],
                ['estate' => '深灣', 'block' => '深灣', 'floor' => '2', 'room' => '9', 'number' => 'xxx|xxx', 'name' => '陳秋瑋'],
                ['estate' => '深灣', 'block' => '深灣', 'floor' => '3', 'room' => '8', 'number' => 'xxx|xxx', 'name' => '吳華薇'],
                ['estate' => '深灣', 'block' => '深灣', 'floor' => '4', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '張上辰'],
                ['estate' => '深灣', 'block' => '深灣', 'floor' => '5', 'room' => '6', 'number' => 'xxx|xxx', 'name' => '陳偉'],
            ],
            2 => [
                ['estate' => '石排灣', 'block' => '碧朗樓', 'floor' => '6', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '陳誠枝'],
                ['estate' => '石排灣', 'block' => '碧朗樓', 'floor' => '8', 'room' => '3', 'number' => 'xxx|xxx', 'name' => '鄭大全'],
                ['estate' => '石排灣', 'block' => '碧朗樓', 'floor' => '11', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '楊宜欣'],
                ['estate' => '石排灣', 'block' => '碧朗樓', 'floor' => '18', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '謝佩州'],
                ['estate' => '石排灣', 'block' => '碧朗樓', 'floor' => '20', 'room' => '8', 'number' => 'xxx|xxx', 'name' => '謝瑋婷'],
                ['estate' => '石排灣', 'block' => '碧月樓', 'floor' => '1', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '李柔娟'],
                ['estate' => '石排灣', 'block' => '碧月樓', 'floor' => '6', 'room' => '3', 'number' => 'xxx|xxx', 'name' => '陳庭瑋'],
                ['estate' => '石排灣', 'block' => '碧月樓', 'floor' => '8', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '李育誠'],
                ['estate' => '石排灣', 'block' => '碧月樓', 'floor' => '9', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '張為正'],
                ['estate' => '石排灣', 'block' => '碧月樓', 'floor' => '16', 'room' => '4', 'number' => 'xxx|xxx', 'name' => '陳欣怡'],
                ['estate' => '石排灣', 'block' => '碧綠樓', 'floor' => '5', 'room' => '8', 'number' => 'xxx|xxx', 'name' => '邱珍修'],
                ['estate' => '石排灣', 'block' => '碧輝樓', 'floor' => '4', 'room' => '9', 'number' => 'xxx|xxx', 'name' => '許之任'],
            ],
            3 => [
                ['estate' => '漁光村', 'block' => '海鷗樓', 'floor' => '12', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '陳木勝'],
                ['estate' => '漁光村', 'block' => '靜海樓', 'floor' => '4', 'room' => '3', 'number' => 'xxx|xxx', 'name' => '李大全'],
                ['estate' => '漁光村', 'block' => '海港樓', 'floor' => '10', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '任正'],
            ],
            4 => [
                ['estate' => '利東村', 'block' => '東昌樓', 'floor' => '12', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '林正全'],
                ['estate' => '利東村', 'block' => '東興樓', 'floor' => '4', 'room' => '3', 'number' => 'xxx|xxx', 'name' => '張毓峰'],
                ['estate' => '利東村', 'block' => '東興樓', 'floor' => '5', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '李祐桂'],
                ['estate' => '利東村', 'block' => '東平樓', 'floor' => '6', 'room' => '4', 'number' => 'xxx|xxx', 'name' => '林嘉慈'],
                ['estate' => '利東村', 'block' => '東安樓', 'floor' => '3', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '汪佳穎'],
            ],
            5 => [
                ['estate' => '華富邨', 'block' => '華安樓', 'floor' => '12', 'room' => '5', 'number' => 'xxx|xxx', 'name' => '潘肇昆'],
                ['estate' => '華富邨', 'block' => '華樂樓', 'floor' => '4', 'room' => '3', 'number' => 'xxx|xxx', 'name' => '袁筱婷'],
                ['estate' => '華貴邨', 'block' => '華孝樓', 'floor' => '5', 'room' => '1', 'number' => 'xxx|xxx', 'name' => '張翔昆'],
                ['estate' => '華貴邨', 'block' => '華賢樓', 'floor' => '6', 'room' => '4', 'number' => 'xxx|xxx', 'name' => '陳信貴'],
                ['estate' => '華貴邨', 'block' => '華愛樓', 'floor' => '3', 'room' => '2', 'number' => 'xxx|xxx', 'name' => '裘貞夫'],
            ],
            6 => [

            ]
        ];
    }
}
