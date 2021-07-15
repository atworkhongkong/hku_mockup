@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/dcss_training">智友醫社訓練</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ICP</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Personal Details</span>
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div>
                                識別編號︰{{ $case['case_number'] }}
                                [<a href="/ecs/dcss/{{ $id }}/edit" target="_blank">詳細資料</a>]
                            </div>
                            <div>
                                中文姓名︰{{ $case['name'] }}
                            </div>
                            <div>
                                Burden: {{ $case['burden'] }} Carer Burden
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到3筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">建立日期</th>
                                <th scope="col">建立人</th>
                                <th scope="col" style="width:10%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>2021-07-06</td>
                                <td>社工一</td>
                                <td><a class="btn btn-primary" href="/ecs/dcss_icp/{{ $id }}/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2021-07-04</td>
                                <td>社工一</td>
                                <td><a class="btn btn-primary" href="/ecs/dcss_icp/{{ $id }}/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2021-06-25</td>
                                <td>社工一</td>
                                <td><a class="btn btn-primary" href="/ecs/dcss_icp/{{ $id }}/edit">編輯</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
