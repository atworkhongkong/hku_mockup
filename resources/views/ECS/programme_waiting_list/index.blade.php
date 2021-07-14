@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">{{ $programmes[$programme_id]['code'] }} - {{ $programmes[$programme_id]['name'] }}</a></li>
                    <li class="breadcrumb-item active">後補名單</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/{{ $programme_id }}/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme/{{ $programme_id }}/attendance" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme/{{ $programme_id }}/waiting_list" class="btn btn-primary">後補名單</a>
                <a href="/ecs/programme/{{ $programme_id }}/tutor_salary" class="btn btn-outline-primary">導師費用</a>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到2筆記錄</span>
                    <div>
                        <a href="/ecs/programme_waiting_list/2/create" class="btn btn-secondary">新增後補名單</a>
                        <a href="/ecs/programme_waiting_list/2/draw" class="btn btn-secondary">抽籤</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%;">會員編號</th>
                            <th scope="col" style="width:15%;">姓名</th>
                            <th scope="col">性別</th>
                            <th scope="col">聯絡電話</th>
                            <th scope="col">申請日期</th>
                            <th scope="col" style="width:14%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($waiting_list as $k => $v)
                            <tr>
                                <td>{{ $v['code'] }}</td>
                                <td>{{ $v['name'] }}</td>
                                <td>{{ $v['gender'] == 'M' ? '男' : '女' }}</td>
                                <td>{{ $v['phone']}}</td>
                                <td>{{ $v['create_date'] }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/ecs/programme_waiting_list/{{ $k }}/edit?programme_id={{ $programme_id }}">編輯</a>
                                    <a class="btn btn-danger">刪除</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="alert alert-primary" role="alert">
                提示︰有些活動並非立即收取費用，而是容許報名人仕先登記資料作抽籤，登記完結後在某日子進行抽籤，後再作報名及收費。
            </div>
        </div>
    </div>
@endsection
