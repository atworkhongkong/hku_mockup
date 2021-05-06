@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">優惠劵</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/coupon" method="GET" onsubmit="return false;">
                    @csrf
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-code">優惠劵編號</label>
                    <input type="text" id="field-code" class="form-control mr-2" placeholder="優惠劵編號" />

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($coupons) }}筆記錄</span>
                        <div>
                            <a href="/ecs/coupon/create" class="btn btn-secondary">新增優惠劵</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">優惠劵編號</th>
                            <th scope="col">名稱</th>
                            <th scope="col">最後使用日期</th>
                            <th scope="col">建立日期</th>
                            <th scope="col">狀態</th>
                            <th scope="col" style="width:8%;">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coupons as $k => $r)
                            <tr>
                                <td>{{ $r['code'] }}</td>
                                <td>{{ $r['name'] }}</td>
                                <td>{{ $r['expiry_date'] }}</td>
                                <td>{{ $r['create_date'] }}</td>
                                <td>{{ $statuses[$r['status']] }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/ecs/coupon/{{ $k }}/edit">編輯</a>
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
