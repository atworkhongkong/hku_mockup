@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工時數</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/volunteer_service" method="GET">
                    <label class="sr-only" for="field-chi-name" >中文姓名</label>
                    <input type="text" class="form-control mr-2" id="field-chi-name" value="黃柏宇" placeholder="義工中文姓名">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($services) }}筆記錄</span>
                        <div>
                            <a href="/ecs/volunteer_service/create" class="btn btn-secondary">新增義工時數</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">義工姓名</th>
                                <th scope="col">活動名稱</th>
                                <th scope="col">服務單位</th>
                                <th scope="col">時數</th>
                                <th scope="col">日期</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $k => $s)
                                <tr>
                                    <td>{{ $k + 1 }}</td>
                                    <td>{{ $s['volunteer'] }}</td>
                                    <td>{{ $s['service'] }}</td>
                                    <td>{{ $s['service_center'] }}</td>
                                    <td>{{ $s['hour'] }}</td>
                                    <td>{{ $s['date'] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/volunteer_service/{{ $k + 1 }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
