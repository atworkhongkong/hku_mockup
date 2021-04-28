@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">租借儀器</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/volunteer" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-center">儀器</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                <option value=""></option>
                                @foreach($equipments as $k => $e)
                                    <option value="{{ $k }}">{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-reference-number">儀器參考編號</label>
                            <input type="text" class="form-control mr-2" id="field-reference-number" placeholder="儀器參考編號">
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-invoice">收據編號</label>
                            <input type="text" id="field-invoice" class="form-control" placeholder="收據編號" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-name">租借者</label>
                            <input type="text" class="form-control mr-2" id="field-name" placeholder="租借者">
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">狀態</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                <option value="">未歸還</option>
                                <option value="">已歸還</option>
                                <option value="">應還未還</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto pr-1">
                            <button type="submit" class="btn btn-primary">搜尋</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($rentals) }}筆記錄</span>
                        <div>
                            <a href="/ecs/equipment_rental/create" class="btn btn-secondary">租借儀器</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">儀器</th>
                                <th scope="col">租借者</th>
                                <th scope="col">身份</th>
                                <th scope="col">識別編號</th>
                                <th scope="col">租借日期</th>
                                <th scope="col">應還日期</th>
                                <th scope="col">逾期日數</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rentals as $k => $v)
                                <tr class="{{ $v['due_date'] < date('Y-m-d') ? 'grey' : '' }}">
                                    <td>{{ $k }}</td>
                                    <td>{{ $equipments[$v['equipment_id']]['name'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['identity'] }}</td>
                                    <td>{{ $v['code'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $v['due_date'] }}</td>
                                    <td>{{ $v['late_day'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/equipment_rental/{{ $k }}/edit">檢視</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
