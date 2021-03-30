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

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/hss/meal" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto">
                            <label class="sr-only" for="field-recording-type" >紀錄</label>
                            <select id="field-recording-type" class="form-control mr-2" name="team">
                                <option value=""></option>
                                <option value="">轉介紀錄</option>
                                <option value="" SELECTED>個案紀錄</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">搜尋</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="alert alert-primary" role="alert">
                提示︰<br>
                若case status 為「已開啟個案」，上方filter default為個案紀錄，否則即以轉介紀錄為default。
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($recordings) }}筆記錄</span>
                        <div>
                            <a href="/hss/case_recording/create?case_id={{ $case_id }}" class="btn btn-secondary">新增轉介/個案紀錄</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">紀錄類型</th>
                                <th scope="col">負責人</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recordings as $k => $v)
                                <tr>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $recording_types[$v['recording_type']] }}</td>
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
