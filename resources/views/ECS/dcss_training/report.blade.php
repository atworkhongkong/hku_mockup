@extends('layouts.master')

@section('content')
    <style>
        table th {
            font-size: 11px;
        }
        table td {
            font-size: 10px;
        }
    </style>
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">智友醫社統計</li>
                </ol>
            </nav>

            @include('ECS.component.dcss_training_report_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/dcss" method="GET" onsubmit="return false;">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    @if ($type == 'individual')
                        <label class="sr-only" for="field-case-number">個案編號</label>
                        <input type="text" class="form-control mr-2" id="field-case-number" placeholder="個案編號" value="JD2002G">
                    @elseif ($type == 'group')
                        <label class="sr-only" for="field-group">組別</label>
                        <input type="text" class="form-control mr-2" id="field-group" placeholder="組別" value="J03">
                    @elseif ($type == 'case_count' || $type == 'training_count' || $type == 'transport_subsidy' || $type == 'fee')
                        <label class="sr-only" for="field-year">年份</label>
                        <select class="form-control mr-2" id="field-year">
                            @for($i = date('Y') ; $i >= 2010 ; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>

                        <label class="sr-only" for="field-month">月份</label>
                        <select class="form-control mr-2" id="field-month">
                            @for($i = 1 ; $i <= 12 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    @endif

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                </form>
            </div>
        </div>
    </div>

    @if ($type == 'individual')
        @include('ECS.dcss_training.report_individual')
    @elseif ($type == 'group')
        @include('ECS.dcss_training.report_group')
    @elseif ($type == 'case_count')
        @include('ECS.dcss_training.report_case_count')
    @elseif ($type == 'training_count')
        @include('ECS.dcss_training.report_training_count')
    @elseif ($type == 'training_count')
        @include('ECS.dcss_training.report_training_count')
    @elseif ($type == 'ZBI')
        @include('ECS.dcss_training.report_ZBI')
    @elseif ($type == 'transport_subsidy')
        @include('ECS.dcss_training.report_transport_subsidy')
    @elseif ($type == 'fee')
        @include('ECS.dcss_training.report_fee')
    @endif
@endsection
