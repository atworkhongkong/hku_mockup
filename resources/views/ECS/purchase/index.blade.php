@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">購物</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/purchase" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">儀器</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                <option value=""></option>
                                @foreach($products as $k => $e)
                                    <option value="{{ $k }}">{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto pr-1">
                            <button type="submit" class="btn btn-primary">搜尋</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($purchases) }}筆記錄</span>
                        <div>
                            <a href="/ecs/purchase/create" class="btn btn-secondary">購物</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">購買者</th>
                                <th scope="col">身份</th>
                                <th scope="col">識別編號</th>
                                <th scope="col">購買日期</th>
                                <th scope="col">貨品</th>
                                <th scope="col">數量</th>
                                <th scope="col">價格</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($purchases as $k => $p)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $p['name'] }}</td>
                                    <td>{{ $p['identity'] }}</td>
                                    <td>{{ $p['code'] }}</td>
                                    <td>{{ $p['create_date'] }}</td>
                                    <td>{{ $products[$p['product_id']]['name'] }}</td>
                                    <td>{{ $p['count'] }}</td>
                                    <td>${{ $p['total_price'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/purchase/{{ $k }}/edit">檢視</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="6" class="text-right">總數︰</td>
                                <td>{{ $grant_count }}</td>
                                <td>${{ $grant_price }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
