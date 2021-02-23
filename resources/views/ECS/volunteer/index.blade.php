@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/volunteer" method="GET">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        <option value=""></option>
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-chi-name" >中文姓名</label>
                    <input type="text" class="form-control mr-2" id="field-chi-name" placeholder="義工中文姓名">

                    <label class="sr-only" for="field-activeness">活躍程度</label>
                    <select id="field-activeness" class="form-control mr-2" name="center">
                        <option value=""></option>
                        @foreach($activeness as $k => $a)
                            <option value="{{ $k }}">{{ $a }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($volunteers) }}筆記錄</span>
                        <div>
                            <a href="/ecs/volunteer/create" class="btn btn-secondary">新增義工</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">義工編號</th>
                                <th scope="col">義工姓名</th>
                                <th scope="col">活躍程度</th>
                                <th scope="col">級別</th>
                                <th scope="col">首次登記日期</th>
                                <th scope="col">最近一次恢復日期</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($volunteers as $k => $v)
                                <tr>
                                    <td>{{ $v['code'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $activeness[$v['activeness'][1]] }}</td>
                                    <td>{{ $grades[$v['grade']] }}</td>
                                    <td>{{ $v['register_date'] }}</td>
                                    <td>{{ $v['recover_date'] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/volunteer/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
