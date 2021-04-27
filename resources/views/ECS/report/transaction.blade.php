@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">財務報表</li>
            <li class="breadcrumb-item">收費總結表</li>
        </ol>
    </nav>

    <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
        <form class="form-inline" action="/report/ecs/transaction" method="GET">
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

    <div class="container-fluid">
        <div class="content__wrapper">
            <p>找到  {{ count($rtn['data']) }} 筆資料</p>
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">分類</th>
                        <th scope="col">活動名稱</th>
                        <th scope="col">活動編號</th>
                        <th scope="col">收據編號</th>
                        <th scope="col">收據編號(舊)</th>
                        <th scope="col">參考編號(舊)</th>
                        <th scope="col">會員編號</th>
                        <th scope="col">中文姓名</th>
                        <th scope="col">英文姓名</th>
                        <th scope="col">收入或收費</th>
                        <th scope="col">收費</th>
                        <th scope="col">經手人</th>
                        <th scope="col">日期</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rtn['data'] as $r)
                    <tr>
                        <td>{{ $r['category'] }}</td>
                        <td>{{ $r['activity_name'] }}</td>
                        <td>{{ $r['activity_code'] }}</td>
                        <td>{{ $r['invoice_number'] }}</td>
                        <td>{{ $r['old_invoice_number'] }}</td>
                        <td>{{ $r['old_reference_number'] }}</td>
                        <td>{{ $r['member_id'] }}</td>
                        <td>{{ $r['member_chi_name'] }}</td>
                        <td>{{ $r['member_eng_name'] }}</td>
                        <td>{{ $r['income_refund'] == 'income' ? '收入' : '作癈' }}</td>
                        <td>{{ $r['fee'] }}</td>
                        <td>{{ $r['created_by'] }}</td>
                        <td>{{ $r['create_date'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-print-none">
            <button type="button" class="btn btn-primary" onclick="window.print();">列 印</button>
        </div>
    </div>
@endsection
