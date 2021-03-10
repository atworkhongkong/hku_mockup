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

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-equipment" class="form-label">貨品</label>
                            <select class="form-control" id="input-equipment" disabled>
                                <option value=""></option>
                                @foreach($products as $k => $e)
                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-count" class="form-label">數量</label>
                            <input type="text" class="form-control" id="input-count" value="{{ $purchase['count'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-total-price" class="form-label">價格</label>
                            <input type="text" class="form-control" id="input-total-price" value="{{ $purchase['total_price'] }}" readonly>
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
