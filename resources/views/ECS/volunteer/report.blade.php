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
                    <input type="hidden" name="type" value="{{ $type }}">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if (false && $type == 'new')
                            <div class="col-auto pr-1">
                                <label class="sr-only" for="field-ste">STE</label>
                                <select id="field-ste" class="form-control mr-2">
                                    <option value=""></option>
                                    <option value="ste">STE</option>
                                    <option value="non_ste">Non-STE</option>
                                </select>
                            </div>
                            <div class="col-auto pr-1">
                                <label class="sr-only" for="field-age">age</label>
                                <select id="field-age" class="form-control mr-2">
                                    <option value=""></option>
                                    <option value="below_60">60歲以下</option>
                                    <option value="over_60">60歲或以上</option>
                                </select>
                            </div>
                        @endif
                    </div>

                    <div class="row mb-2 g-0">
                        @if (false)
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
                        @elseif ($type == 'new' || $type == 'accumulate')
                            <div class="col-auto">
                                <label class="sr-only" for="field-year">年份</label>
                                <select class="form-control" id="field-year">
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                </select>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="alert alert-primary" role="alert">
                @if ($type == 'new')
                    某個中心在某個特定時間內的新增義工人數 (包括退出後再恢復成為義工)
                @elseif ($type == 'accumulate')
                    某個中心在某個特定時間前的累積義工人數 (所有已登記，無論是活躍還是非活躍都包含在內)
                @endif
            </div>

            @if ($type == 'new')
                @include('ECS.volunteer.report_new')
            @elseif ($type == 'accumulate')
                @include('ECS.volunteer.report_accumulate')
            @endif


        </div>
    </div>
@endsection
