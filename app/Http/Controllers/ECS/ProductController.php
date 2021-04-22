<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王換娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const PRODUCTS = [
        1 => ['name' => '加營素(大)900克', 'count' => 50, 'price' => 175, 'code' => 'PM001'],
        2 => ['name' => '加營素(大)400克', 'count' => 80, 'price' => 90, 'code' => 'PM002'],
        3 => ['name' => '怡保康(小)400克', 'count' => 80, 'price' => 100, 'code' => 'PM003'],
        4 => ['name' => '德寶123紙尿褲(大碼)', 'count' => 120, 'price' => 46, 'code' => 'PP001'],
        5 => ['name' => '德寶123紙尿褲(中碼)', 'count' => 100, 'price' => 36, 'code' => 'PP002'],
        6 => ['name' => '康保長方型片心(中碼)', 'count' => 100, 'price' => 30, 'code' => 'PP003'],
    ];

    public function __construct()
    {
        View::share('centers', self::CENTERS);
        View::share('products', self::PRODUCTS);
    }

    public function index()
    {
        return view('ECS.product.index');
    }

    public function create()
    {
        return view('ECS.product.create');
    }

    public function edit($product_id)
    {
        $product = self::PRODUCTS[$product_id];
        return view('ECS.product.edit', compact('product', 'product_id'));
    }

    public function log($product_id)
    {
        $product = self::PRODUCTS[$product_id];
        return view('ECS.product.log', compact('product', 'product_id'));
    }

    public function stockEdit($product_id)
    {
        $product = self::PRODUCTS[$product_id];
        return view('ECS.product.stock_edit', compact('product_id', 'product'));
    }

    public static function getProducts(): array
    {
        return self::PRODUCTS;
    }
}
