@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">義工統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.volunteer_report_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/volunteer/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        @if ($type != 'accumulate')
                            <div class="col-auto">
                                <label class="sr-only" for="field-start-date">開始日期</label>
                                <input type="date" id="field-start-date" class="form-control" value="2021-01-01" />
                            </div>
                            <div class="col-auto px-0 pt-2">
                                至
                            </div>
                        @endif
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-01-31" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="alert alert-primary" role="alert">
                @if ($type == 'new')
                    某個中心在某個特定時間內的新增義工人數 (包括退出後再恢復成為義工)
                @else
                    某個中心在某個特定時間前的累積義工人數 (所有已登記，無論是活躍還是非活躍都包含在內)
                @endif
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ $count }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">義工編號</th>
                            <th scope="col">義工姓名</th>
                            <th scope="col">級別</th>
                            <th scope="col">首次登記日期</th>
                        </tr>
                        </thead>
                        <tbody>
                            @for($i = 1 ; $i <= $count ; $i++)
                                <tr>
                                    <td><a href="/ecs/volunteer/{{ $i }}/edit" target="_blank">{{ $volunteers[$i]['code'] }}</a></td>
                                    <td>{{ $volunteers[$i]['name'] }}</td>
                                    <td>{{ $grades[$volunteers[$i]['grade']] }}</td>
                                    <td>{{ $volunteers[$i]['register_date'] }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
