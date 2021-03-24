@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/volunteer">義工</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增義工</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">義工編號</label>
                            <input type="text" class="form-control" id="input-chi-name" placeholder="VO10012">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-gender">性別</label>
                            <select class="form-control" id="input-gender">
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-hkid" class="form-label">身份證號碼</label>
                            <input type="text" class="form-control" id="input-hkid">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-address" class="form-label">住址</label>
                            <input type="text" class="form-control" id="input-address">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-mobile" class="form-label">手提電話</label>
                            <input type="text" class="form-control" id="input-mobile">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-career" class="form-label">職業</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($careers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-education" class="form-label">教育程度</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($educations as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-education" class="form-label">參與義務時間</label>
                            <div>
                                @foreach($times as $k => $t)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="time-checkbox-{{ $k }}" value="">
                                        <label class="form-check-label" for="time-checkbox-{{ $k }}">{{ $t }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-education" class="form-label">服務對象</label>
                            <div>
                                @foreach($targets as $k => $t)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="education-checkbox-{{ $k }}" value="">
                                        <label class="form-check-label" for="education-checkbox-{{ $k }}">{{ $t }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-activeness" class="form-label">STE</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="">STE</option>
                                <option value="">非STE</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-activeness" class="form-label">級別</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($grades as $k => $g)
                                    <option value="">{{ $g }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-center" class="form-label">狀態</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="A">有效</option>
                                <option value="A">無效</option>
                            </select>
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
