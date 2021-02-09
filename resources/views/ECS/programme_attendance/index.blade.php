@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item active" aria-current="page">出席記錄</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme_register/2" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme_attendance/2" class="btn btn-primary">出席記錄</a>
                <a href="/ecs/programme_waiting_list/2" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme_tutor_salary/2" class="btn btn-outline-primary">導師費用</a>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到2筆記錄</span>
                    <div>
                        <a href="/ecs/programme_attendance/2/create" class="btn btn-secondary">新增出席記錄</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">日期</th>
                            <th scope="col">報名人數</th>
                            <th scope="col">出席人數</th>
                            <th scope="col">缺席人數</th>
                            <th scope="col" style="width:5%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2021-03-01</td>
                            <td>18</td>
                            <td>16</td>
                            <td>2</td>
                            <td>
                                <a href="/ecs/programme_attendance/12/edit">
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
