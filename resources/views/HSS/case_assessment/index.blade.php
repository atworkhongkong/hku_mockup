@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">個案重估</li>
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
                            <input type="text" class="form-control" id="input-case-number" value="{{ $case['case_number'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-create_date" class="form-label">開檔日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="{{ $case['create_date'] }}" readonly>
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

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-gender">性別</label>
                            <select class="form-control" id="input-gender" disabled>
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="input-dob" class="form-label">出生日期</label>
                            <input type="text" class="form-control" id="input-dob" value="{{ $case['dob'] }}" readonly>
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
                        <span>找到{{ count($case_assessments) }}筆記錄</span>
                        <div>
                            <a href="/hss/case_assessment/create?case_id={{ $case_id }}" class="btn btn-secondary">新增重估紀錄</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:10%;">#</th>
                                <th scope="col">重估日期</th>
                                <th scope="col">負責人</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($case_assessments as $k => $v)
                                <tr>
                                    <td>{{ $v['assessment_number'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $v['created_by'] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/hss/case_assessment/{{ $v['assessment_id'] }}/edit">編輯</a>
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
