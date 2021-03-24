@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">智友醫社同工</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/dcss_staff" method="GET">
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
                            <label class="sr-only" for="field-chi-name" >同工姓名</label>
                            <input type="text" class="form-control mr-2" id="field-chi-name" placeholder="同工中文姓名">
                        </div>
                        <div class="col-auto pr-1">
                            <button type="submit" class="btn btn-primary">搜尋</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($staff) }}筆記錄</span>
                        <div>
                            <a href="/ecs/dcss_staff/create" class="btn btn-secondary">新增同工</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">同工姓名</th>
                                <th scope="col">電郵地址</th>
                                <th scope="col">級別</th>
                                <th scope="col">入職日期</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff as $k => $v)
                                <tr>
                                    <td>{{ $v['chi_name'] }}</td>
                                    <td>{{ $v['email'] }}</td>
                                    <td>{{ $v['post'] }}</td>
                                    <td>{{ $v['report_date'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/dcss_staff/{{ $k }}/edit">編輯</a>
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
