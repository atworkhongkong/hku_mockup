@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">租借儀器</li>
                </ol>
            </nav>

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
                                <th scope="col">件數</th>
                                <th scope="col">租借者</th>
                                <th scope="col">會員編號</th>
                                <th scope="col">租借日期</th>
                                <th scope="col">預計歸還日期</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rentals as $k => $v)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $equipments[$v['equipment_id']]['name'] }}</td>
                                    <td>{{ $v['count'] }}</td>
                                    <td>{{ $v['member_name'] }}</td>
                                    <td>{{ $v['member_code'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ date('Y-m-d', strtotime("+14 day", strtotime($v['create_date']))) }}</td>
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
