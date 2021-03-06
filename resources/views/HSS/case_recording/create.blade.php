@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/case">個案</a></li>
                    <li class="breadcrumb-item"><a href="/hss/case/{{ $case_id }}/recording">個案紀錄 - {{ $case['name'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增個案紀錄</li>
                </ol>
            </nav>

            <div class="alert alert-primary" role="alert">
                提示︰<br>
                若case status 為「已開啟個案」，下方紀錄類型 default 為個案紀錄，否則即以轉介紀錄為default。
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-create-date" class="form-label">日期</label>
                    <input type="date" class="form-control" id="input-create-date" value="{{ date('Y-m-d') }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-recording-type" class="form-label">紀錄類型</label>
                    <select id="input-recording-type" class="form-control mr-2" name="team">
                        <option value=""></option>
                        <option value="">轉介紀錄</option>
                        <option value="" SELECTED>個案紀錄</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-content" class="form-label">內容</label>
                    <textarea class="form-control" id="input-content" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-remark" class="form-label">備註</label>
                    <textarea class="form-control" id="input-remark" rows="3"></textarea>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">提 交</button>
                </div>
            </div>
        </div>
    </div>
@endsection
