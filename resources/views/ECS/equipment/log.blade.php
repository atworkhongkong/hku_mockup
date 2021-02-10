@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/equipment">儀器</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $equipment['name'] }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到5筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">原有數量</th>
                                <th scope="col">新增/減少</th>
                                <th scope="col">數量數量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2021-01-31</td>
                                <td>2</td>
                                <td>3</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>2021-01-27</td>
                                <td>3</td>
                                <td>(1)</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>2021-01-25</td>
                                <td>0</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
