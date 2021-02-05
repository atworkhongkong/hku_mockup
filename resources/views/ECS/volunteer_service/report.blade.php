@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工時數總結</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/volunteer/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k == 0 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" value="2021-01-01" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-01-31" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到5筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">義工姓名</th>
                                <th scope="col">活動名稱</th>
                                <th scope="col">日期</th>
                                <th scope="col">時數</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $s)
                                <tr>
                                    <td><a href="/ecs/volunteer_service?q={{ $s['volunteer'] }}" target="_blank">{{ $s['volunteer'] }}</a></td>
                                    <td>{{ $s['service'] }}</td>
                                    <td>{{ $s['date'] }}</td>
                                    <td>{{ $s['hour'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right">總時數︰</td>
                                <td>37</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
