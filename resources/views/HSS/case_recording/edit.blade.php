@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/case">個案</a></li>
                    <li class="breadcrumb-item"><a href="/hss/case/{{ $case_id }}/recording">個案紀錄 - {{ $case['name'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $recording['create_date'] }}</li>
                </ol>
            </nav>

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
                        <option value="" {{ $recording['recording_type'] == 'referral' ? 'SELECTED' : '' }}>轉介紀錄</option>
                        <option value="" {{ $recording['recording_type'] == 'case' ? 'SELECTED' : '' }}>個案紀錄</option>
                    </select>
                </div>
            </div>

            @if ($recording)
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-staff" class="form-label">負責人</label>
                        <input type="text" class="form-control" id="input-staff" value="{{ $recording['created_by'] }}">
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-content" class="form-label">內容</label>
                    <textarea class="form-control" id="input-content" rows="3">{{ $recording ? 'xxxx xxxx xxxx xx xxxx' : ''  }}</textarea>
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
