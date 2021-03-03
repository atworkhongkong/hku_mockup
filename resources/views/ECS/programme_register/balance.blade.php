@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">活動埋數</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/programme_register/balance" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" value="2021-03-01" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="alert alert-warning text-center" role="alert">
                未埋數
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($balances) }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:15%;">時間</th>
                                <th scope="col" style="width:15%;">活動編號</th>
                                <th scope="col">活動名稱</th>
                                <th scope="col">會員編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">收款同事</th>
                                <th scope="col">費用</th>
                                <th scope="col">收費方式</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($balances as $b)
                                <tr>
                                    <td>{{ $b['time'] }}</td>
                                    <td>{{ $b['code'] }}</td>
                                    <td>{{ $b['programme_name'] }}</td>
                                    <td>{{ $b['member_code'] }}</td>
                                    <td>{{ $b['member_name'] }}</td>
                                    <td>{{ $b['created_by'] }}</td>
                                    <td>{{ $b['receive_method'] }}</td>
                                    <td>${{ $b['fee'] }}</td>
                                    <td><a href="/ecs/programme_register/{{ $b['register_id'] }}" class="btn btn-primary" target="_blank" >詳情</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="7" class="text-right">總數︰</td>
                                <td>$580.0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <label for="input-bank-in" class="form-label">銀行入數</label>
                    <input type="text" class="form-control" id="input-bank-in" placeholder="請填寫入數日期">
                </div>
            </div>

            <div class="alert alert-primary" role="alert">
                提示︰若已埋數，上方則顯示已埋數，及顯示埋數之時間，並容許職員填寫銀行入數日期，下方按鍵則由「埋數」變為「更新入數日期」
            </div>

            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary">埋 數</button>
                </div>
            </div>
        </div>
    </div>
@endsection
