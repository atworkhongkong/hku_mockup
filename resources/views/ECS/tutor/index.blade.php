@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">導師</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/tutor" method="GET">
                    <label class="sr-only" for="field-center">搜尋範圍</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        <option value=""></option>
                        @foreach($centers as $k => $c)
                            <option value="{{ $k + 1 }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-chi-name" >中文姓名</label>
                    <input type="text" class="form-control mr-2" id="field-chi-name" placeholder="導師中文姓名">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到10筆記錄</span>
                        <div>
                            <a href="/ecs/tutor/create" class="btn btn-secondary">新增導師</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">導師姓名</th>
                                <th scope="col">所屬中心</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutors as $k => $t)
                                <tr>
                                    <td>{{ $k  }}</td>
                                    <td>{{ $t['name'] }}</td>
                                    <td>{{ Arr::random($centers) }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/tutor/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
