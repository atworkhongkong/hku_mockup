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

                    <label class="sr-only" for="field-year">年份</label>
                    <select class="form-control mr-2" id="field-year">
                        @for($i = date('Y') ; $i >= 2010 ; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>

                    @if ($type === 'default_case')
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

    @if ($type == 'service_questionnaire')
        @include('ECS.dcss.report_service_questionnaire')
    @elseif ($type == 'escort_questionnaire')
        @include('ECS.dcss.report_escort_questionnaire')
    @elseif ($type == 'close')
        @include('ECS.dcss.report_close')
    @elseif ($type == 'attrition')
        @include('ECS.dcss.report_attrition')
    @elseif ($type == 'default_case')
        @include('ECS.dcss.report_default_case')
    @endif
@endsection
