@extends('layouts.master')

@section('top_style')
    <style>
        @media print {
            body {
                font-size: 11px;
            }
            .table > :not(caption) > * > * {
                padding: 2px;
            }
            @page { size: landscape; }
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">飯據</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/finance/meal" method="GET">
                    <label class="sr-only" for="field-year">年份</label>
                    <select id="field-year" class="form-control mr-2" name="year">
                        <option value="">請選擇年份</option>
                        @for ($i = date("Y") - 10 ; $i <= date("Y") ; $i++)
                            <option value="{{ $i }}" {{ isset($q['year']) && $q['year'] == $i ? 'SELECTED' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>

                    <label class="sr-only" for="field-month">月份</label>
                    <select id="field-month" class="form-control mr-2" name="month">
                        <option value="">請選擇月份</option>
                        @for ($i = 1 ; $i <= 12 ; $i++)
                            <option value="{{ $i }}" {{ isset($q['month']) && $q['month'] == $i ? 'SELECTED' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>找到  {{ count($rtn['data']) }} 筆資料</p>
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <td rowspan="2">檔案編號</td>
                                <td rowspan="2">姓名</td>
                                <td rowspan="2">編號</td>
                                @for ($i =  1 ; $i <= $number_of_day ; $i++)
                                    <td colspan="2" class="text-center">{{ $i }}</td>
                                @endfor
                                <td rowspan="2">總數</td>
                            </tr>
                            <tr>
                                @for ($i =  1 ; $i <= $number_of_day ; $i++)
                                    @foreach(['上', '下'] as $t)
                                        <td>{{ $t }}</td>
                                    @endforeach
                                @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <?php $summary =  []; ?>
                            @foreach($rtn['data'] as $d)
                                <tr>
                                    <td>{{ $d['case_number'] }}</td>
                                    <td class="text-nowrap">{{ $d['name'] }}</td>
                                    <td>{{ $d['id'] }}</td>
                                    @for ($i = 1  ; $i <= $number_of_day ; $i++)
                                        <?php
                                        $date = $rtn['year'].'-'.str_pad($rtn['month'], 2, '0', STR_PAD_LEFT).'-'.str_pad($i, 2, '0', STR_PAD_LEFT);
                                        if (!array_key_exists($date, $summary)) {
                                            $summary[$date]['am'] = $summary[$date]['pm'] = 0;
                                        }
                                        ?>

                                        @foreach(['am', 'pm'] as $t)
                                            @if (in_array(['date' => $date, 'am_pm' => $t], $d['meal']))
                                                <td title="{{ $d['name'] }} - {{ $date }} {{ Str::upper($t) }}" class="text-center">&#8226;</td>
                                                <?php $summary[$date][$t] += 1; ?>
                                            @else
                                                <td title="{{ $d['name'] }} - {{ $date }} {{ Str::upper($t) }}">&nbsp;</td>
                                            @endif
                                        @endforeach
                                    @endfor
                                    <td class="text-center" title="{{ $d['name'] }}">{{ $d['meal_count'] }}</td>
                                </tr>
                            @endforeach

                            <tfoot>
                                @foreach (['am' => '上午', 'pm' => '下午'] as $k => $v)
                                    <tr>
                                        <td colspan="3" class="text-right">{{ $v }}總收</td>
                                        <?php $sum = 0; ?>
                                        @foreach ($summary as $date => $dv)
                                            <?php $sum += $summary[$date][$k]; ?>
                                            <td colspan="2" class="text-center" title="{{ $date }} {{ Str::upper($k) }}">{{ $summary[$date][$k] }}</td>
                                        @endforeach
                                        <td class="text-center" title="{{ $v }}總數">{{ $sum }}</td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3" class="text-right">總餐數</td>
                                    <?php $sum = 0; ?>
                                    @foreach ($summary as $date => $v)
                                        <?php $sum += ($summary[$date]['am'] + $summary[$date]['pm']); ?>
                                        <td colspan="2" class="text-center font-weight-bold" title="{{ $date }}總餐數">{{ ($summary[$date]['am'] + $summary[$date]['pm']) }}</td>
                                    @endforeach
                                    <td class="text-center font-weight-bold" title="總餐數">{{ $sum }}</td>
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
