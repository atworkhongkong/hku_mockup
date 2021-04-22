<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PurchaseController extends Controller
{
    const CENTERS = [
        1 => '賽馬會黃志強長者地區中心',
        2 => '南區長者地區中心',
        3 => '方王換娣長者鄰舍中心',
        4 => '林應和長者鄰舍中心',
    ];

    const IDENTITIES = [
        1 => '護老者',
        2 => '長者會員',
        3 => '職員'
    ];

    const PURCHASES = [
        4 => ['identity' => '長者會員', 'code' => '03EL30012', 'name' => '陳明康', 'phone' => '9898xxxx', 'product_id' => 1, 'count' => 1, 'create_date' => '2021-02-26 13:05', 'created_by' => '同事A', 'invoice' => '80182'],
        3 => ['identity' => '長者會員', 'code' => '03EL30005', 'name' => '張大妹', 'phone' => '9132xxxx', 'product_id' => 2, 'count' => 2, 'create_date' => '2021-02-25 10:05', 'created_by' => '同事B', 'invoice' => '80172'],
        2 => ['identity' => '長者會員', 'code' => '03EL30018', 'name' => '趙霞', 'phone' => '9085xxxx', 'product_id' => 1, 'count' => 1, 'create_date' => '2021-02-21 17:16', 'created_by' => '同事A', 'invoice' => '80008'],
        1 => ['identity' => '護老者', 'code' => 'J0012', 'name' => '黃敏', 'phone' => '6085xxxx', 'product_id' => 3, 'count' => 1, 'create_date' => '2021-01-01 12:35', 'created_by' => '同事B', 'invoice' => '79982']
    ];

    private $products;

    public function __construct()
    {
        $this->products = ProductController::getProducts();

        View::share('centers', self::CENTERS);
        View::share('products', $this->products);
        View::share('identities', self::IDENTITIES);
    }

    public function index()
    {
        $purchases = self::PURCHASES;
        $grant_count = 0;
        $grant_price = 0;
        foreach($purchases as $k => $p) {
            $purchases[$k]['total_price'] = $this->products[$p['product_id']]['price'] * $p['count'];
            $grant_count += $p['count'];
            $grant_price += $purchases[$k]['total_price'];
        }
        return view('ECS.purchase.index', compact('purchases', 'grant_count', 'grant_price'));
    }

    public function create()
    {
        return view('ECS.purchase.create');
    }

    public function edit($purchase_id)
    {
        $purchase = self::PURCHASES[$purchase_id];
        $purchase['total_price'] = $this->products[$purchase['product_id']]['price'] * $purchase['count'];
        return view('ECS.purchase.edit', compact('purchase'));
    }
}
