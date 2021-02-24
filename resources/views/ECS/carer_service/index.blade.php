@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">護老者</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/carer" method="GET">
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
                            <label class="sr-only" for="field-service">服務</label>
                            <select id="field-service" class="form-control mr-2">
                                @foreach($service_types as $k => $s)
                                    <option value="{{ $k }}">{{ $s }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
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

                    <div class="row mb-2">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($services) }}筆記錄</span>
                        <div>
                            <a href="/ecs/carer_service/create" class="btn btn-secondary">新增護老者服務</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">服務</th>
                                <th scope="col">服務日期</th>
                                <th scope="col">目的</th>
                                <th scope="col">負責同事</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $k => $v)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $service_types[$v['service_type_id']] }}</td>
                                    <td>{{ $v['service_date'] }}</td>
                                    <td>{{ $v['desc'] }}</td>
                                    <td>{{ $v['contact_person'] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/carer_service/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
