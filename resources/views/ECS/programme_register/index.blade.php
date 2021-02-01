@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item active" aria-current="page">報名人數</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme_register/2" class="btn btn-primary">報名人數</a>
                <a href="/ecs/programme_attendance/2" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme_waiting_list/2" class="btn btn-outline-primary">後補名單</a>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>活動名額︰20, 有效報名人數︰2, 取消人數︰1</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" style="width:15%;">會員編號</th>
                            <th scope="col">姓名</th>
                            <th scope="col">手提電話</th>
                            <th scope="col">金額</th>
                            <th scope="col">收據編號</th>
                            <th scope="col">報名日期</th>
                            <th scope="col">狀態</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>03EL300102</td>
                            <td>陳永仁</td>
                            <td>98989898</td>
                            <td>$100.0</td>
                            <td><a href="/ecs/invoice/A0000012" target="_blank">A0000012</a></td>
                            <td>2021-01-05</td>
                            <td>有效</td>
                        </tr>
                        <tr>
                            <td>03ELS300805</td>
                            <td>劉健明</td>
                            <td>96969696</td>
                            <td>$80.0</td>
                            <td><a href="/ecs/invoice/A0000011" target="_blank">A0000011</a></td>
                            <td>2021-01-04</td>
                            <td>有效</td>
                        </tr>
                        <tr>
                            <td>03ELS300805</td>
                            <td>葉問</td>
                            <td>95959595</td>
                            <td>$100.0</td>
                            <td><a href="/ecs/invoice/A0000010" target="_blank">A0000010</a></td>
                            <td>2021-01-04</td>
                            <td>已取消</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
