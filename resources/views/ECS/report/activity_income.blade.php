@extends('layouts.master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">財務報表</li>
                <li class="breadcrumb-item">活動收費總結表</li>
            </ol>
        </nav>

        <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
            <form class="form-inline" action="/report/activity_income" method="GET">
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


        <div class="content__wrapper">
            <p>找到  {{ count($activity_incomes) }} 筆資料</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">收費類別</th>
                        <th scope="col">活動名稱</th>
                        <th scope="col">收入</th>
                        <th scope="col">作費收據</th>
                        <th scope="col">總計</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activity_incomes as $k => $ai)
                        @php
                            $temp = Str::of($k)->split('/\|/');
                        @endphp
                        <tr>
                            <td>{{ $temp[0] }}</td>
                            <td>{{ $temp[1] }}</td>
                            <td>{{ $ai['income'] }}</td>
                            <td>{{ $ai['refund'] != 0 ? $ai['refund'] : '' }}</td>
                            <td>{{ $ai['income'] + $ai['refund'] }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2" class="text-right">合計︰</td>
                        <td>{{ $total_income }}</td>
                        <td>{{ $total_refund }}</td>
                        <td>{{ $total_income + $total_refund }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-print-none">
            <button type="button" class="btn btn-primary" onclick="window.print();">列 印</button>
        </div>
    </div>
@endsection
