@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/dcss_staff_training">智友醫社同工訓練</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增訓練</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-staff-id" class="form-label">同工姓名</label>
                            <select class="form-control" id="input-staff-id">
                                <option></option>
                                @foreach($staff as $k => $s)
                                    <option {{ $staff_training['staff_id'] == $k ? 'SELECTED' : '' }}>{{ $s['chi_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-training-date" class="form-label">日期</label>
                            <input type="date" class="form-control" id="input-training-date" value="{{ $staff_training['training_date'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-start-time" class="form-label">開始時間</label>
                            <input type="time" class="form-control" id="input-start-time" value="{{ $staff_training['start_time'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-end-time" class="form-label">結束時間</label>
                            <input type="time" class="form-control" id="input-end-time" value="{{ $staff_training['end_time'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-training-hour" class="form-label">時數</label>
                            <input type="text" class="form-control" id="input-training-hour"  value="{{ $staff_training['training_hour'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-organizer" class="form-label">舉辦機構</label>
                            <input type="text" class="form-control" id="input-organizer" value="{{ $staff_training['organizer'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-training-name" class="form-label">活動名稱</label>
                            <input type="text" class="form-control" id="input-training-name" value="{{ $staff_training['activity_name'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
