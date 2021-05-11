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
                                @foreach($identities as $k => $t)
                                    <option value="{{ $k }}">{{ $t }}</option>
                                @endforeach
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
                                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" value="5" readonly></td>
                                        <td>
                                            <input class="form-control" type="text" value="1">
                                        </td>
                                        <td><input type="text" class="form-control" value="175" readonly></td>
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
                            <button type="button" class="btn btn-primary">新增優惠劵</button>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">優惠劵編號</th>
                                        <th scope="col">優惠劵名稱</th>
                                        <th scope="col">折扣</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-control" type="text" value="NY2021"></td>
                                        <td><input class="form-control" type="text" value="20元優惠劵"></td>
                                        <td><input class="form-control" type="text" value="20"></td>
                                        <td><i class="far fa-trash"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-total-price" class="form-label">總價格</label>
                            <input type="text" class="form-control" id="input-total-price" value="155" readonly>
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

                    <div class="alert alert-primary" role="alert">
                        提示︰若填寫完識別編號後，請自動填入姓名及聯絡電話
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
