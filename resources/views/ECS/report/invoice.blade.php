@extends('layouts.master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">財務報表</li>
                <li class="breadcrumb-item">單據</li>
            </ol>
        </nav>

        <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
            <form class="form-inline" action="/report/invoice" method="GET">
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


        <div class="content__wrapper">
            <p>找到  {{ count($data) }} 筆資料</p>
            <table class="table table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" width="25%">單據編號</th>
                        <th scope="col" width="25%">單據編號(舊)</th>
                        <th scope="col">姓名</th>
                        <th scope="col">金額</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $invoice_number => $d)
                        <tr>
                            <td>{{ $invoice_number  }}</td>
                            <td>{{ $d['old_invoice_number']  }}</td>
                            <td>{{ $d['name']  }}</td>
                            <td>{{ $d['fee'] == 'CANCELLED' ? $d['fee'] : $d['fee']  }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">總計︰</td>
                        <td>{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-print-none">
            <button type="button" class="btn btn-primary" onclick="window.print();">列 印</button>
        </div>
    </div>
@endsection
