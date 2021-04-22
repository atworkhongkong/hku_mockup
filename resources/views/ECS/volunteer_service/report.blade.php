@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.volunteer_report_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/volunteer_service/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">義工小組</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($teams as $k => $t)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $t }}</option>
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

            <div class="alert alert-primary" role="alert">
                某個中心義工小組的時數總結
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($services) }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">義工編號</th>
                                <th scope="col">義工姓名</th>
                                <th scope="col">活躍程度</th>
                                <th scope="col">級別</th>
                                <th scope="col">STE/Non-STE</th>
                                <th scope="col">時數</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $s)
                                <tr>
                                    <td><a href="/ecs/volunteer/{{ $s['volunteer_id'] }}/edit" target="_blank">{{ $s['code'] }}</a></td>
                                    <td>{{ $s['volunteer'] }}</td>
                                    <td>{{ $activeness[$s['activeness']] }}</td>
                                    <td>{{ $s['grade'] }}</td>
                                    <td>{{ $s['ste'] }}</td>
                                    <td>{{ $s['hour'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-right" colspan="5">總時數︰</td>
                                <td>37</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">匯出</button>
                </div>
            </div>
        </div>
    </div>
@endsection
