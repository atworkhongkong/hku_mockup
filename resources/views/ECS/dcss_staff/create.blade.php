@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/dcss_staff">智友醫社同工</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增同工</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
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
                            <label for="input-email" class="form-label">電子郵件</label>
                            <input type="text" class="form-control" id="input-email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">住宅電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-mobile" class="form-label">手提電話</label>
                            <input type="text" class="form-control" id="input-mobile">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-post" class="form-label">職位</label>
                            <input type="text" class="form-control" id="input-post">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-report-date" class="form-label">入職日期</label>
                            <input type="text" class="form-control" id="input-report-date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
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
