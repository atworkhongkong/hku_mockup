@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">個案</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/dcss" method="GET" onsubmit="return false;">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-type">類別</label>
                            <select id="field-type" class="form-control mr-1" name="center">
                                <option value=""></option>
                                <option value="code">個案編號</option>
                                <option value="name">申請人姓名</option>
                                <option value="hkid">身份證編號</option>
                                <option value="mobile">電話號碼</option>
                            </select>
                        </div>

                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-key-word">關鍵字</label>
                            <input type="text" class="form-control mr-1" id="field-key-word" placeholder="關鍵字">
                        </div>

                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-status">狀態</label>
                            <select id="field-type" class="form-control mr-1" name="center">
                                @foreach($statuses as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-auto px-1">
                            <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#more-search" aria-expanded="false" aria-controls="more-search">進階搜尋</button>
                        </div>
                    </div>

                    <div class="collapse mt-2" id="more-search" style="width:100%;">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label">個案申請日期</label>
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
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($cases) }}筆記錄</span>
                        <div>
                            <a href="/hss/case/create" class="btn btn-secondary">個案申請及轉介</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:10%;">個案編號</th>
                                <th scope="col">申請人姓名</th>
                                <th scope="col">姓別</th>
                                <th scope="col">出生日期</th>
                                <th scope="col">申請日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cases as $k => $v)
                                <tr>
                                    <td>{{ $v['case_number'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['gender'] }}</td>
                                    <td>{{ $v['dob'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $statuses[$v['status']] }}</td>
                                    <td><a class="btn btn-primary" href="/hss/case/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
