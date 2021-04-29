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
                <form class="form" action="/ecs/volunteer_service/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($type == 'service_hour')
                            <div class="col-auto pr-1">
                                <label class="sr-only" for="field-team">義工小組</label>
                                <select id="field-team" class="form-control mr-2" name="center">
                                    @foreach($teams as $k => $t)
                                        <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $t }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" value="2021-01-01" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-01-31" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            @if ($type == 'service_hour')
                @include('ecs.volunteer_service.report_service_hour')
            @elseif ($type == 'support_services')
                @include('ecs.volunteer_service.report_support_services')
            @endif
        </div>
    </div>
@endsection
