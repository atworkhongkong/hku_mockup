@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">假期</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/holiday" method="GET" onsubmit="return false;">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @for($i = date("Y") + 1 ; $i >= date("Y") - 10 ; $i--)
                            <option value="{{ $i}}" {{ $i == 2021  ? 'SELECTED' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($holiday) }}筆記錄</span>
                        <div>
                            <a href="/ecs/holiday/create" class="btn btn-secondary">新增假期</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">備註</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($holiday as $k => $h)
                                <tr>
                                    <td>{{ $h['date'] }}</td>
                                    <td>{{ $h['desc'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ecs/holiday/{{ $k }}/edit">編輯</a>
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
