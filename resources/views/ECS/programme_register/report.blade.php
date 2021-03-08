@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">活動報名統計報告</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/programme_register/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-indicator">社署指標</label>
                            <input type="text" id="field-indicator" class="form-control" placeholder="社署指標" />
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
                        <span>找到 {{ count($report) }} 筆記錄</span>
                    </div>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">活動名稱</th>
                                <th scope="col">日期</th>
                                <th scope="col">報名人數</th>
                                <th scope="col">堂數</th>
                                <th scope="col">總出席次數</th>
                                <th scope="col">社署指標</th>
                                <th scope="col">聯絡人</th>
                                <th scope="col">總收費</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($report as $v)
                                <tr>
                                    <td>{{ $v['code'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['date'] }}</td>
                                    <td>{{ $v['register_count'] }}</td>
                                    <td>{{ $v['lesson_count'] }}</td>
                                    <td>{{ $v['attendance_count'] }}</td>
                                    <td>{{ $v['indicator'] }}</td>
                                    <td>{{ $v['contact_person'] }}</td>
                                    <td>${{ $v['fee'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-right" colspan="3"></td>
                                <td>87</td>
                                <td>9</td>
                                <td>303</td>
                                <td></td>
                                <td></td>
                                <td>6270</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
