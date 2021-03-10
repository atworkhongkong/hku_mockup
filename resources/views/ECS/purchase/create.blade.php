@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/purchase">購物</a></li>
                    <li class="breadcrumb-item active" aria-current="page">購物</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">中心</label>
                            <select id="input-center" class="form-control mr-2">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k  == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-person" class="form-label">身份</label>
                            <select class="form-control" id="input-person">
                                <option value="">護老者</option>
                                <option value="">長者會員</option>
                                <option value="">職員</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-code" class="form-label">識別編號</label>
                            <input type="text" class="form-control" id="input-code">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-product" class="form-label">貨品</label>
                            <select class="form-control" id="input-product">
                                <option value=""></option>
                                @foreach($products as $k => $e)
                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-available" class="form-label">現存件數</label>
                            <input type="text" class="form-control" id="input-available" value="5" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-count" class="form-label">數量</label>
                            <input type="text" class="form-control" id="input-count" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-total-price" class="form-label">價格</label>
                            <input type="text" class="form-control" id="input-total-price" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-equipment" class="form-label">付款方式</label>
                            <select class="form-control" id="input-equipment">
                                <option>現金</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提交及列印收據</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
