@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/volunteer_service">義工時數</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service['volunteer'] }}</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>義工個人資料</span>
                </div>
                <div class="p-3">
                    <div class="row mb-3">
                        <div class="col-12">
                            <input type="text" class="form-control" id="input-chi-name" value="VO10012" placeholder="義工編號" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="{{ $service['volunteer'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="Wong Pak Yu" readonly>
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
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example" disabled>
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? "SELECTED" : "" }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="/ecs/volunteer/1/edit" target="_blank">詳細資料</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-eng-name" class="form-label">服務單位</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="service-type" class="form-label">服務類別</label>
                            <select id="service-type" class="custom-select">
                                <option value="team">義工小組</option>
                                <option value="support">支援服務</option>
                            </select>
                        </div>
                    </div>

                    <div id="service-type-team">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="input-team" class="form-label">義工小組</label>
                                <select class="custom-select" aria-label="select example">
                                    <option value=""></option>
                                    @foreach($teams as $k => $c)
                                        <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input-activity-name" class="form-label">活動名稱</label>
                                <input type="text" class="form-control" id="input-activity-name" value="老人外展">
                            </div>
                        </div>
                    </div>

                    <div id="service-type-support" style="display:none;">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="service-type" class="form-label">服務性質</label>
                                <select id="service-type" class="custom-select">
                                    <option></option>
                                    @foreach($support_services as $k => $c)
                                        <option value="{{ $k }}">{{ $c }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="support-target-name" class="form-label">受助人姓名</label>
                                <input type="text" class="form-control" id="support-target-name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-hour" class="form-label">服務時數</label>
                            <input type="text" class="form-control" id="input-hour" value="{{ $service['hour'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-date" class="form-label">服務日期</label>
                            <input type="date" class="form-control" id="input-date" value="{{ $service['date'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-remark" class="form-label">備註</label>
                            <input type="text" class="form-control" id="input-remark">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">更 新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(function() {
            $("#service-type").change(function() {
                if ($(this).val() === 'support') {
                    $('#service-type-support').show();
                    $('#service-type-team').hide();
                } else {
                    $('#service-type-support').hide();
                    $('#service-type-team').show();
                }
            });
        })
    </script>
@endsection
