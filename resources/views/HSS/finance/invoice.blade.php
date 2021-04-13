@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">單據</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/finance/invoice" method="GET">
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

                    <label class="sr-only" for="field-type">收費類別</label>
                    <select id="field-is-received" class="form-control mr-2" name="is_received">
                        <option value="">所有收費</option>
                        <option value="1" {{ isset($q['is_received']) && $q['is_received'] == 1 ? 'SELECTED' : '' }}>已收</option>
                        <option value="0" {{ isset($q['is_received']) && $q['is_received'] == 0 ? 'SELECTED' : '' }}>應收未收</option>
                        <option value="-1" {{ isset($q['is_received']) && $q['is_received'] == -1 ? 'SELECTED' : '' }}>已取消</option>
                    </select>

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr><td width="20%">已收服務費</td><td>{{ $rtn['gross_service'] }}</td></tr>
                        <tr><td>應收未收</td><td>{{ $rtn['gross_non_receive'] }}</td></tr>
                        <tr><td>租借會車</td><td>{{ $rtn['gross_car_rental'] }}</td></tr>
                        <tr><td>交通費</td><td>{{ $rtn['gross_transportation'] }}</td></tr>
                        <tr><td>合共</td><td>{{ $rtn['gross_fee'] }}</td></tr>
                        </tbody>
                    </table>

                    <hr class="my-5">

                    <p>找到  {{ count($rtn['data']) }} 筆資料</p>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <th scope="col" width="25%">編號</th>
                        <th scope="col" width="25%">姓名</th>
                        <th scope="col">金額</th>
                        <th scope="col">備註</th>
                        </thead>
                        <tbody>
                        @foreach($rtn['data'] as $d)
                            <tr>
                                <td>{{ $d['invoice_number'] }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['fee'] }}</td>
                                <td>{{ $d['remark'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
