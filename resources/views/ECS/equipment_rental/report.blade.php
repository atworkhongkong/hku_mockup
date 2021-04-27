@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">租借儀器統計報告</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/volunteer_service/report" method="GET">
                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k  == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-center">儀器</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($equipments as $k => $e)
                                    <option value="{{ $k }}">{{ $e['name'] }}</option>
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
                        <span>找到{{ count($rental_report) }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">租借者</th>
                                <th scope="col">身份</th>
                                <th scope="col">識別編號</th>
                                <th scope="col">租借物品</th>
                                <th scope="col">物品參考編號</th>
                                <th scope="col">租借日期</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rental_report as $k => $v)
                                <tr>
                                    <td><a href="/ecs/equipment_rental/{{ $k }}/edit" target="_blank">{{ $k }}</a></td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['identity'] }}</td>
                                    <td>{{ $v['code'] }}</td>
                                    <td>{{ $equipments[$v['equipment_id']]['name'] }}</td>
                                    <td>{{ $v['equipment_reference_number'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-primary">匯出</button>
                </div>
            </div>
        </div>
    </div>
@endsection
