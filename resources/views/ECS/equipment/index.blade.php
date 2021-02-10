@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">儀嚣</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($equipments) }}筆記錄</span>
                        <div>
                            <a href="/ecs/equipment/create" class="btn btn-secondary">新增儀器</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">儀器</th>
                                <th scope="col">數量</th>
                                <th scope="col" style="width:14%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipments as $k => $e)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $e['name'] }}</td>
                                    <td>{{ $e['count'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/equipment/{{ $k }}/edit">編輯</a>
                                        <a class="btn btn-primary" href="/ecs/equipment/{{ $k }}/log">記錄</a>
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