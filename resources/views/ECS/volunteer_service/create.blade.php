@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/volunteer">義工時數</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增義工時數</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/volunteer_service" method="GET">
                    <label class="sr-only" for="field-volunteer-code" >義工編號</label>
                    <input type="text" id="field-volunteer-code" class="form-control mr-2" placeholder="會員編號" value="5"/>

                    <button type="submit" class="btn btn-primary">搜尋義工</button>
                </form>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>義工個人資料</span>
                </div>
                <div class="p-3">
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="黃柏宇" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="Wong Pak Yu" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="input-gender">性別</label>
                            <select class="form-control" id="input-gender" disabled>
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example" disabled>
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k == 2 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="input-chi-name" class="form-label">活動名稱</label>
                        <input type="text" class="form-control" id="input-chi-name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">服務單位</label>
                        <select class="custom-select" aria-label="select example">
                            <option value=""></option>
                            @foreach($centers as $k => $c)
                                <option value="{{ $k + 1 }}">{{ $c }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-hour" class="form-label">服務時數</label>
                        <input type="text" class="form-control" id="input-hour">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-date" class="form-label">服務日期</label>
                        <input type="date" class="form-control" id="input-date">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-remark" class="form-label">備註</label>
                        <input type="text" class="form-control" id="input-remark">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
