@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">{{ $programmes[$programme_id]['code'] }} - {{ $programmes[$programme_id]['name'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">導師費用</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/{{ $programme_id }}/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme/{{ $programme_id }}/attendance" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme/{{ $programme_id }}/waiting_list" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme/{{ $programme_id }}/tutor_salary" class="btn btn-primary">導師費用</a>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到{{ count($tutor_salaries) }}筆記錄</span>
                    <div>
                        <a href="/ecs/programme_tutor_salary/{{ $programme_id }}/create" class="btn btn-secondary">新增課程導師</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">導師編號</th>
                            <th scope="col">導師</th>
                            <th scope="col">分帳模式</th>
                            <th scope="col">薪金</th>
                            <th scope="col">結算</th>
                            <th scope="col" style="width:20%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tutor_salaries as $k => $v)
                            <tr>
                                <td>{{ $tutors[$v['tutor_id']]['code'] }}</td>
                                <td>{{ $tutors[$v['tutor_id']]['name'] }}</td>
                                <td>{{ $v['salary_type'] }}</td>
                                <td>{{ $v['done'] ? '已結算' : '未結算' }}</td>
                                <td>${{ $v['salary'] }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/ecs/programme_tutor_salary/{{ $v['id'] }}/edit">編輯</a>
                                    <a class="btn btn-primary" href="/ecs/programme_tutor_salary/{{ $v['id'] }}/contrast">合約</a>
                                    <a class="btn btn-primary disabled" href="javascript:void(0);" style="cursor:default;">糧單</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="text-right">總數︰</td>
                            <td>${{ $total }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <div class="row mb-2">
                    <div class="col-12">
                        <label class="" for="field-total-fee">活動總金額</label>
                        <input type="text" id="field-total-fee" class="form-control" value="16000" readonly />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label class="" for="field-lesson-count">堂數</label>
                        <input type="text" id="field-lesson-count" class="form-control" value="2" readonly />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label class="" for="field-admin-fee">行政費</label>
                        <input type="text" id="field-admin-fee" class="form-control" value="1000" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary">提 交</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
