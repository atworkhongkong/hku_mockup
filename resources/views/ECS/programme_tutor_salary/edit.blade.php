@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">{{ $programmes[$programme_id]['code'] }} - {{ $programmes[$programme_id]['name'] }}</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/tutor_salary">導師費用</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $tutors[$tutor_salary['tutor_id']]['name'] }}</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/{{ $programme_id }}/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme/{{ $programme_id }}/attendance" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme/{{ $programme_id }}/waiting_list" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme/{{ $programme_id }}/tutor_salary" class="btn btn-primary">導師費用</a>
            </div>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="" for="field-tutor">導師</label>
                            <select class="custom-select" aria-label="Default select example">
                                <option></option>
                                @foreach($tutors as $k => $v)
                                    <option value="{{ $v['tutor_id'] }}" {{ $v['tutor_id'] == $tutor_salary['tutor_id'] ? 'SELECTED' : '' }}>{{ $v['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="" for="field-payment-date">預計支付日期</label>
                            <input type="date" id="field-payment-date" class="form-control mr-2" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <label class="" for="field-payment-type">分帳模式</label>
                            <select class="custom-select" aria-label="Default select example">
                                @foreach($salary_types as $k => $v)
                                    <option value="" {{ $k == 3 ? 'SELECTED' : '' }}>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <label class="" for="field-material-fee">材料費</label>
                            <input type="text" id="field-material-fee" class="form-control" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="" for="field-hour-salary">時薪</label>
                            <input type="text" id="field-hour-salary" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label class="" for="field-hour">時數</label>
                            <input type="text" id="field-hour" class="form-control" value="20" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="" for="field-per-person">每人</label>
                            <input type="text" id="field-per-person" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label class="" for="field-per-lesson">每堂</label>
                            <input type="text" id="field-per-lesson" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label class="" for="field-full">全期</label>
                            <input type="text" id="field-full" class="form-control" value="{{ $tutor_salary['salary'] }}" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <label class="" for="field-ratio">分賬比例</label>
                            <input type="text" id="field-ratio" class="form-control" placeholder="%" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="" for="field-salary">收入</label>
                            <input type="text" id="field-salary" class="form-control" value="{{ $tutor_salary['salary'] }}" readonly />
                        </div>
                        <div class="col-md-6">
                            <label class="" for="field-done">結算</label>
                            <select class="custom-select" aria-label="Default select example">
                                <option value=""></option>
                                <option value="">結算</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
