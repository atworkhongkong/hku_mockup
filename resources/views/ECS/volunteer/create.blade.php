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
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="input-chi-name" class="form-label">中文姓名</label>
                        <input type="text" class="form-control" id="input-chi-name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">英文姓名</label>
                        <input type="text" class="form-control" id="input-eng-name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-phone" class="form-label">聯絡電話</label>
                        <input type="text" class="form-control" id="input-phone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-email" class="form-label">電郵地址</label>
                        <input type="text" class="form-control" id="input-email">
                    </div>

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
                        <label for="input-center" class="form-label">狀態</label>
                        <select class="custom-select" aria-label="select example">
                            <option value="A">有效</option>
                            <option value="A">無效</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
