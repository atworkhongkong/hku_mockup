<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王煥娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const PRODUCTS = [
        1 => ['name' => '奶粉 (大)', 'count' => 50, 'price' => 200],
        2 => ['name' => '奶粉 (細)', 'count' => 80, 'price' => 100],
        3 => ['name' => '尿片 (大)', 'count' => 120, 'price' => 160],
        4 => ['name' => '尿片 (中)', 'count' => 100, 'price' => 110],
        5 => ['name' => '尿片 (細)', 'count' => 100, 'price' => 90],
    ];

    public function index()
    {
        $centers = self::CENTERS;
        $products = self::PRODUCTS;
        return view('ECS.product.index', compact('centers', 'products'));
    }

    public function create()
    {
        $centers = self::CENTERS;
        return view('ECS.product.create', compact('centers'));
    }

    public function edit($product_id)
    {
        $centers = self::CENTERS;
        $product = self::PRODUCTS[$product_id];
        return view('ECS.product.edit', compact('centers', 'product'));
    }

    public function log($product_id)
    {
        $product = self::PRODUCTS[$product_id];
        return view('ECS.product.log', compact('product', 'product_id'));
    }
}
