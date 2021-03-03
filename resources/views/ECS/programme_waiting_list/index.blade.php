@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item active">後補名單</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/2/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme_attendance/2" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme_waiting_list/2" class="btn btn-primary">後補名單</a>
                <a href="/ecs/programme_tutor_salary/2" class="btn btn-outline-primary">導師費用</a>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到2筆記錄</span>
                    <div>
                        <a href="/ecs/programme_waiting_list/2/create" class="btn btn-secondary">新增後補名單</a>
                        <a href="/ecs/programme_waiting_list/2/draw" class="btn btn-secondary">抽籤</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%;">會員編號</th>
                            <th scope="col" style="width:15%;">姓名</th>
                            <th scope="col">姓別</th>
                            <th scope="col">聯絡電話</th>
                            <th scope="col">申請日期</th>
                            <th scope="col" style="width:14%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>03EL300102</td>
                            <td>陳永仁</td>
                            <td>男</td>
                            <td>98989898</td>
                            <td>2021-01-05</td>
                            <td>
                                <a class="btn btn-primary" href="/ecs/programme_waiting_list/20/edit">編輯</a>
                                <a class="btn btn-danger">刪除</a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>劉健明</td>
                            <td>男</td>
                            <td>96969696</td>
                            <td>2021-01-04</td>
                            <td>
                                <a class="btn btn-primary" href="/ecs/programme_waiting_list/21/edit">編輯</a>
                                <a class="btn btn-danger">刪除</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="alert alert-primary" role="alert">
                提示︰有些活動並非立即收取費用，而是容許報名人仕先登記資料作抽籤，登記完結後在某日子進行抽籤，後再作報名及收費。
            </div>
        </div>
    </div>
@endsection
