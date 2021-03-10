@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">房間</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/invoice" method="GET" onsubmit="return false;">
                    @csrf
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-name">房間</label>
                    <input type="text" id="field-name" class="form-control mr-2" name="invoice_id" placeholder="房間" />

                    <label class="sr-only" for="field-equipment" >設備</label>
                    <input type="text" class="form-control mr-2" id="field-equipment" placeholder="提供設備">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($rooms) }}筆記錄</span>
                        <div>
                            <a href="/ecs/room/create" class="btn btn-secondary">新增房間</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" style="width:8%;">#</th>
                            <th scope="col">房間</th>
                            <th scope="col">位置</th>
                            <th scope="col">容納人數</th>
                            <th scope="col" style="width:8%;">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $k => $r)
                            <tr>
                                <td>{{ $k }}</td>
                                <td>{{ $r['name'] }}</td>
                                <td>{{ $r['location'] }}</td>
                                <td>{{ $r['capacity'] }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/ecs/room/{{ $k }}/edit">編輯</a>
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
