@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/hidden_elderly">隱蔽長者</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增隱蔽長者</li>
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
                            <label for="input-name" class="form-label">姓名/稱呼</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-gender">性別</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-district" class="form-label">接觸地區</label>
                            <input type="text" class="form-control" id="input-district">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-dob-year">出生年份</label>
                            <input type="text" class="form-control" id="input-dob-year">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-age" class="form-label">年齡</label>
                            <input type="text" class="form-control" id="input-age">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-living-condition" class="form-label">居住情況</label>
                            <input type="text" class="form-control" id="input-living-condition">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-home-type" class="form-label">居所類別</label>
                            <input type="text" class="form-control" id="input-home-type">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-status" class="form-label">個案狀況</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($statuses as $k => $s)
                                    <option value="{{ $k }}">{{ $s }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
