@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">隱蔽長者</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/hidden_elderly" method="GET" onsubmit="return false;">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-chi-name" >中文姓名</label>
                            <input type="text" class="form-control mr-2" id="field-chi-name" placeholder="隱蔽長者姓名/稱呼">
                        </div>
                        <div class="col-auto pr-1">
                            <button type="submit" class="btn btn-primary">搜尋</button>
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#more-search" aria-expanded="false" aria-controls="more-search">進階搜尋</button>
                        </div>
                    </div>

                    <div class="collapse mt-2" id="more-search" style="width:100%;">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label justify-content-start font-weight-bold">個案開啟日期</label>
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
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label justify-content-start font-weight-bold">狀態</label>
                                    <select id="field-status" class="form-control mr-2">
                                        <option></option>
                                        @foreach($statuses as $k => $s)
                                            <option value="{{ $k }}">{{ $s }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($hidden_elderly) }}筆記錄</span>
                        <div>
                            <a href="/ecs/hidden_elderly/create" class="btn btn-secondary">新增隱蔽長者</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">接觸地區</th>
                                <th scope="col">出生年份</th>
                                <th scope="col">性別</th>
                                <th scope="col">個案開啟日期</th>
                                <th scope="col">結束日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hidden_elderly as $k => $v)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['district'] }}</td>
                                    <td>{{ $v['dob_year'] }}</td>
                                    <td>{{ $v['gender'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td></td>
                                    <td>{{ $statuses[$v['status']] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/hidden_elderly/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
