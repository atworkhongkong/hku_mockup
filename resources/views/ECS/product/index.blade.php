@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">貨品</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/carer" method="GET" onsubmit="return false;">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k + 1 }}" {{ $k  == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-product">貨品</label>
                    <input type="text" class="form-control mr-2" id="field-product" placeholder="貨品">

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($products) }}筆記錄</span>
                        <div>
                            <a href="/ecs/product/create" class="btn btn-secondary">新增貨品</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">貨品</th>
                                <th scope="col">數量</th>
                                <th scope="col">價格</th>
                                <th scope="col" style="width:14%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $k => $e)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $e['name'] }}</td>
                                    <td>{{ $e['count'] }}</td>
                                    <td>${{ $e['price'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/product/{{ $k }}/edit">編輯</a>
                                        <a class="btn btn-primary" href="/ecs/product/{{ $k }}/log">紀錄</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
