@extends('layouts.master')

@section('content')
    <div class="container">
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
                            <td colspan="4">&nbsp</td>
                            <td colspan="3" class="text-center">膳食(A)</td>
                            <td colspan="5" class="text-center">洗衣(B) <small>件數 / 費用</small></td>
                            <td colspan="7" class="text-center">服務(C) <small>次數 / 分鐘</small></td>
                            <td colspan="2" class="text-center">A+B+C</td>
                        </tr>
                        <tr>
                            <td>個案編號</td><td>繳費日期</td><td>服務使用者</td><td>級別</td>
                            <td>餐數</td><td>材料費</td><td>服務費</td>
                            <td>大</td><td>中</td><td>小</td><td>總數</td><td>服務費</td>
                            <td>個人</td><td>家務</td><td>護送</td><td>購物</td><td>其他</td><td>總時數</td><td>總數</td>
                            <td>總收費</td><td>收據編號</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rtn['data'] as $d)
                            <tr>
                                <td>{{ $d['case_number'] }}</td>
                                <td>{{ date('Y-m-d', strtotime($d['invoice_create_date'])) }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['grade'] }}</td>
                                <td>{{ $d['meal']['meal_count'] }}</td>
                                <td>{{ $d['meal']['ingredient_fee'] }}</td>
                                <td>{{ $d['meal']['service_fee'] }}</td>
                                <td>{{ $d['laundry']['data']['L'] ?? 0 }} / {{ ($d['laundry']['data']['L'] ?? 0) * $fees['laundry']['L'] }}</td>
                                <td>{{ $d['laundry']['data']['M'] ?? 0 }} / {{ ($d['laundry']['data']['M'] ?? 0) * $fees['laundry']['M'] }}</td>
                                <td>{{ $d['laundry']['data']['S'] ?? 0 }} / {{ ($d['laundry']['data']['S'] ?? 0) * $fees['laundry']['S'] }}</td>
                                <td>{{ $d['laundry']['laundry_count']  }}</td>
                                <td>{{ $d['laundry']['service_fee']  }}</td>
                                <td>{{ $d['service']['data']['PC']['count'] ?? 0 }} / {{ $d['service']['data']['PC']['minute'] ?? 0 }}</td>
                                <td>{{ $d['service']['data']['HC']['count'] ?? 0 }} / {{ $d['service']['data']['HC']['minute'] ?? 0 }}</td>
                                <td>{{ $d['service']['data']['ESCORT']['count'] ?? 0 }} / {{ $d['service']['data']['ESCORT']['minute'] ?? 0 }}</td>
                                <td>{{ $d['service']['data']['PUR']['count'] ?? 0 }} / {{ $d['service']['data']['PUR']['minute'] ?? 0 }}</td>
                                <td>?</td>
                                <td>{{ $d['service']['service_hour']}}</td>
                                <td>{{ $d['service']['service_fee']}}</td>
                                <td>{{ $d['total_fee']}}</td>
                                <td>{{ $d['invoice_number']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot class="text-right">
                        <tr>
                            <td colspan="4">總計︰</td>
                            <td>{{ $sum['meal']['meal_count'] }}</td>
                            <td>{{ $sum['meal']['ingredient_fee'] }}</td>
                            <td>{{ $sum['meal']['service_fee'] }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $sum['laundry']['laundry_fee'] }}</td>
                            <td>{{ $sum['laundry']['service_fee'] }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $sum['service']['service_fee'] }}</td>
                            <td>{{ $sum['total_fee'] }}</td>
                            <td></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
