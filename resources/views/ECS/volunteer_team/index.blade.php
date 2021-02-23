@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工小組</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/volunteer_team" method="GET">
                    <label class="sr-only" for="field-center">搜尋範圍</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        <option value=""></option>
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-name">義工小組</label>
                    <input type="text" class="form-control mr-2" id="field-name" placeholder="義工小組">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到 {{ count($teams) }}筆記錄</span>
                        <div>
                            <a href="/ecs/volunteer_team/create" class="btn btn-secondary">新增義工小組</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">義工小組</th>
                                <th scope="col">建立日期</th>
                                <th scope="col">負責人</th>
                                <th scope="col">狀態</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $k => $v)
                                <tr>
                                    <td>{{ $k  }}</td>
                                    <td>{{ $v['chi_name'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $v['contact_person'] }}</td>
                                    <td>{{ $statuses[$v['status']] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/volunteer_team/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
