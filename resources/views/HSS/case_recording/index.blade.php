@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/case">個案</a></li>
                    <li class="breadcrumb-item active" aria-current="page">個案紀錄 - {{ $case['name'] }}</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>個案資料</span>
                </div>
                <div class="p-3">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-case_number" class="form-label">個案編號</label>
                            <input type="text" class="form-control" id="input-case_number" value="{{ $case['case_number'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-create_date" class="form-label">開檔日期</label>
                            <input type="text" class="form-control" id="input-create_date" value="{{ $case['create_date'] }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="{{ $case['name'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="xxx xxx xxx" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="/hss/case/{{ $case_id }}/edit" target="_blank">詳細資料</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($recordings) }}筆記錄</span>
                        <div>
                            <a href="/hss/case_recording/create?case_id={{ $case_id }}" class="btn btn-secondary">新增個案紀錄</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">負責人</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recordings as $k => $v)
                                <tr>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $v['created_by'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/hss/case_recording/{{ $k }}/edit?case_id={{ $case_id }}">編輯</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
