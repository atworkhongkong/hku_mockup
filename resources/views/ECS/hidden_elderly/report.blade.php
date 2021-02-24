@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">隱蔽長者統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.hidden_elderly_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/hidden_elderly/report" method="GET">
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
                        @if ($type != 'accumulate')
                            <div class="col-auto">
                                <label class="sr-only" for="field-start-date">開始日期</label>
                                <input type="date" id="field-start-date" class="form-control" value="2021-01-01" />
                            </div>
                            <div class="col-auto px-0 pt-2">
                                至
                            </div>
                        @endif

                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-01-31" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="alert alert-primary" role="alert">
                @if ($type == 'new')
                    顯示選擇日期內的新增個案
                @elseif ($type == 'accumulate')
                    顯示選擇日期內的由day1到選擇日期的累積個案
                @elseif ($type == 'reactivate')
                    顯示選擇日期內的重啟個案(如有)
                @elseif ($type == 'close')
                    顯示選擇日期內的結束個案(如有)
                @endif
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ $case_counts[$type] }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">接觸地區</th>
                                <th scope="col">出生年份</th>
                                <th scope="col">年齡</th>
                                <th scope="col">性別</th>
                                <th scope="col">個案開啟日期</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for ($i = 1 ; $i <= $case_counts[$type] ; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><a href="/ecs/hidden_elderly/{{ $i }}/edit" target="_blank">{{ $hidden_elderly[$i]['name'] }}</a></td>
                                <td>{{ $hidden_elderly[$i]['district'] }}</td>
                                <td>{{ $hidden_elderly[$i]['dob_year'] }}</td>
                                <td>{{ $hidden_elderly[$i]['age'] }}</td>
                                <td>{{ $hidden_elderly[$i]['gender'] }}</td>
                                <td>{{ $hidden_elderly[$i]['create_date'] }}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
