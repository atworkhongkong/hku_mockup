@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">收入記錄</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/finance/income" method="GET">
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
                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                            <td width="20%">收據編號</td>
                            <td>{{ $data['invoice_numbers'] }}</td>
                        </tr>
                        <tr>
                            <td>本月應收未收服務費</td>
                            <td>{{ Helper::formatMoney($data['gross_non_receive'], true) }}</td>
                        </tr>
                        <tr>
                            <td>已收服務費</td>
                            <td>{{ Helper::formatMoney($data['gross_received'], true) }}</td>
                        </tr>
                        <tr>
                            <td>租用會車</td>
                            <td>{{ Helper::formatMoney($data['car_rental'], true) }}</td>
                        </tr>
                        <tr>
                            <td>交通費</td>
                            <td>{{ Helper::formatMoney($data['transportation'], true) }}</td>
                        </tr>
                        <tr>
                            <td>收條簿總數</td>
                            <td>{{ Helper::formatMoney($data['invoices_total'], true) }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <hr class="my-5">

                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                            <td>膳食(A)</td>
                            <td>{{ Helper::formatMoney($break_down['meal_ingredient_fee'], true) }}</td>
                        </tr>
                        <tr>
                            <td>洗衣(B)</td>
                            <td>{{ Helper::formatMoney($break_down['laundry_fee'], true) }}</td>
                        </tr>
                        <tr>
                            <td>服務費</td>
                            <td>{{ Helper::formatMoney($break_down['meal_service_fee'] + $break_down['laundry_service_fee'] + $break_down['service_fee'], true) }}</td>
                        </tr>
                        <tr>
                            <td>租用會車</td>
                            <td>{{ Helper::formatMoney($break_down['car_rental'], true) }}</td>
                        </tr>
                        <tr>
                            <td>交通費</td>
                            <td>{{ Helper::formatMoney($break_down['transportation'], true) }}</td>
                        </tr>
                        <tr>
                            <td>活動費</td>
                            <td>{{ Helper::formatMoney($break_down['activity'], true) }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <hr class="my-5">

                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                            <td>本月應收</td>
                            <td>{{ Helper::formatMoney($data['invoices_total'], true) }}</td>
                        </tr>
                        <tr>
                            <td>應收未收</td>
                            <td>{{ Helper::formatMoney($data['gross_non_receive'] ? $data['gross_non_receive'] : 0, true) }}</td>
                        </tr>
                        <tr>
                            <td>收回應收未收</td>
                            <td>{{ Helper::formatMoney($data['gross_late_receive'], true) }}</td>
                        </tr>
                        <tr>
                            <td>入銀行總數</td>
                            <td>{{ Helper::formatMoney($data['balance'], true) }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
