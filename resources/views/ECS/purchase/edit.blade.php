@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/purchase">購物</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $purchase['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">中心</label>
                            <select id="input-center" class="form-control mr-2" disabled>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k  == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-person" class="form-label">身份</label>
                            <select class="form-control" id="input-person" disabled>
                                @foreach($identities as $k => $t)
                                    <option value="{{ $k }}" {{ $purchase['identity'] == $t ? 'SELECTED' : '' }}>{{ $t }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-code" class="form-label">識別編號</label>
                            <input type="text" class="form-control" id="input-code" value="{{ $purchase['code'] }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-name" value="{{ $purchase['name'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone" value="{{ $purchase['phone'] }}" readonly>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>貨品</span>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">貨品</th>
                                    <th scope="col">現存件數</th>
                                    <th scope="col">購買數量</th>
                                    <th scope="col">價格</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" id="input-product">
                                            <option value=""></option>
                                            @foreach($products as $k => $e)
                                                <option value="{{ $k }}" {{ $k == $purchase['product_id'] ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="5" readonly></td>
                                    <td>
                                        <input class="form-control" type="text" value="{{ $purchase['count'] }}">
                                    </td>
                                    <td><input type="text" class="form-control" value="{{ $products[$purchase['product_id']]['price'] * $purchase['count'] }}" readonly></td>
                                    <td>
                                        <i class="far fa-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" id="input-product">
                                            <option value=""></option>
                                            @foreach($products as $k => $e)
                                                <option value="{{ $k }}">{{ $e['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="" readonly></td>
                                    <td>
                                        <input class="form-control" type="text" value="">
                                    </td>
                                    <td><input type="text" class="form-control" value="" readonly></td>
                                    <td>
                                        <i class="far fa-trash"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>優惠劵</span>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">優惠劵名稱</th>
                                        <th scope="col">折扣</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-control" type="text" value="NY2021"></td>
                                        <td><input class="form-control" type="text" value="20"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-total-price" class="form-label">總價格</label>
                            <input type="text" class="form-control" id="input-total-price" value="{{ $purchase['total_price'] - 20 }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-create-date" class="form-label">購買日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="{{ $purchase['create_date'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-invoice" class="form-label">收據編號 [<a href="javascript:void(0);">檢視</a>]</label>
                            <input type="text" class="form-control" id="input-invoice" value="{{ $purchase['invoice'] }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-created-by" class="form-label">經手人</label>
                            <input type="text" class="form-control" id="input-created-by" value="{{ $purchase['created_by'] }}" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
