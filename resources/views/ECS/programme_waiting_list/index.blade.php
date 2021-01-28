@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">親子天地</a></li>
                    <li class="breadcrumb-item active">後補名單</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme_register/2" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme_attendance/2" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme_waiting_list/2" class="btn btn-primary">後補名單</a>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到2筆記錄</span>
                    <div>
                        <a href="/ecs/programme_waiting_list/2/create" class="btn btn-secondary">新增後補名單</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%;">會員編號</th>
                            <th scope="col" style="width:15%;">姓名</th>
                            <th scope="col">手提電話</th>
                            <th scope="col">申請日期</th>
                            <th scope="col" style="width:5%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>03EL300102</td>
                            <td>陳永仁</td>
                            <td>98989898</td>
                            <td>2021-01-05</td>
                            <td>
                                <a href="/ecs/programme_waiting_list/20/edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>劉健明</td>
                            <td>96969696</td>
                            <td>2021-01-04</td>
                            <td>
                                <a href="/ecs/programme_waiting_list/21/edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
