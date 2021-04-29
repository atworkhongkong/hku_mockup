@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">收據</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/invoice" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-invoice">收據編號</label>
                            <input type="text" id="field-invoice" class="form-control" placeholder="收據編號" />
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-handled-by">經手人</label>
                            <input type="text" id="field-handled-by" class="form-control" value="同事A" placeholder="經手人" />
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($invoices) }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:15%;">時間</th>
                                <th scope="col" style="width:12%;">收據編號</th>
                                <th scope="col">收費類別</th>
                                <th scope="col">活動編號</th>
                                <th scope="col">會員編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">經手人</th>
                                <th scope="col">收費方式</th>
                                <th scope="col">費用</th>
                                <th scope="col">收據狀態</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $b)
                                <tr>
                                    <td>{{ $b['time'] }}</td>
                                    <td>{{ $b['invoice'] }}</td>
                                    <td>{{ $b['income_type'] }}</td>
                                    <td>{{ $b['programme_code'] }}</td>
                                    <td>{{ $b['member_code'] }}</td>
                                    <td>{{ $b['member_name'] }}</td>
                                    <td>{{ $b['created_by'] }}</td>
                                    <td>{{ $b['receive_method'] }}</td>
                                    <td>${{ $b['fee'] }}</td>
                                    <td>{{ $invoice_statuses[$b['invoice_status']] }}</td>
                                    <td><a href="/ecs/invoice/{{ $b['invoice'] }}" class="btn btn-primary">檢視</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
