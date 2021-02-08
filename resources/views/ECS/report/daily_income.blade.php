@extends('layouts.master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">財務報表</li>
                <li class="breadcrumb-item">每日收入</li>
            </ol>
        </nav>

        <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
            <form class="form-inline" action="/report/daily_income" method="GET">
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
            <p>找到  {{ count($rtn['data']) }} 筆資料</p>
            <table class="table table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">日期</th>
                        <th scope="col">收入</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rtn['data'] as $d)
                        <tr>
                            <td>{{ $d['date']  }}</td>
                            <td>{{ $d['income']  }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="text-right">總計︰</td>
                        <td>{{ $rtn['total'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-print-none">
            <button type="button" class="btn btn-primary" onclick="window.print();">列 印</button>
        </div>
    </div>
@endsection
