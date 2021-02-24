@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/product">貨品</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/product/{{ $product_id }}/log" method="GET">
                    <div class="col-auto">
                        <label class="sr-only" for="field-start-date">開始日期</label>
                        <input type="date" id="field-start-date" class="form-control" />
                    </div>
                    <div class="col-auto px-0 pt-2">
                        至
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="field-end-date">結束日期</label>
                        <input type="date" id="field-end-date" class="form-control" value="{{ date("Y-m-d") }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到3筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">原有數量</th>
                                <th scope="col">新增/減少</th>
                                <th scope="col">數量</th>
                                <th scope="col">更新職員</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2021-01-31</td>
                                <td>2</td>
                                <td>3</td>
                                <td>5</td>
                                <td>同事B</td>
                            </tr>
                            <tr>
                                <td>2021-01-27</td>
                                <td>3</td>
                                <td>(1)</td>
                                <td>2</td>
                                <td>同事B</td>
                            </tr>
                            <tr>
                                <td>2021-01-25</td>
                                <td>0</td>
                                <td>3</td>
                                <td>3</td>
                                <td>同事B</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
