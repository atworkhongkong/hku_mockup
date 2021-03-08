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
        1 => ['name' => '加營素(大)900克', 'count' => 50, 'price' => 175],
        2 => ['name' => '加營素(大)400克', 'count' => 80, 'price' => 90],
        3 => ['name' => '怡保康(小)400克', 'count' => 80, 'price' => 100],
        4 => ['name' => '德寶123紙尿褲(大碼)', 'count' => 120, 'price' => 46],
        5 => ['name' => '德寶123紙尿褲(中碼)', 'count' => 100, 'price' => 36],
        6 => ['name' => '康保長方型片心(中碼)', 'count' => 100, 'price' => 30],
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
