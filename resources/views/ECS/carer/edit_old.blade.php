@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/volunteer">護老者</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $carer['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-12 mb-3">
                        <label for="input-code" class="form-label">編號</label>
                        <input type="text" class="form-control" id="input-code" value="{{ $carer_id }}" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-chi-name" class="form-label">中文姓名</label>
                        <input type="text" class="form-control" id="input-chi-name" value="{{ $carer['name'] }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">英文姓名</label>
                        <input type="text" class="form-control" id="input-eng-name" value="xxx xxx xxx">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-gender">性別</label>
                        <select class="form-control" id="input-gender">
                            <option value="M">男</option>
                            <option value="F">女</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-hkid" class="form-label">身份證號碼</label>
                        <input type="text" class="form-control" id="input-hkid" value="Exxxxxx(x)">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-address" class="form-label">住址</label>
                        <input type="text" class="form-control" id="input-address" value="xxxxxxxxxxx">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-type" class="form-label">類別</label>
                        <select class="form-control" id="input-type">
                            <option></option>
                            <option value="oc" SELECTED>護老者</option>
                            <option value="nc">有需要護老者</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-phone" class="form-label">聯絡電話</label>
                        <input type="text" class="form-control" id="input-phone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-email" class="form-label">電郵地址</label>
                        <input type="text" class="form-control" id="input-email" value="xxx@example.com">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-center" class="form-label">所屬中心</label>
                        <select class="custom-select" aria-label="select example">
                            <option value=""></option>
                            @foreach($centers as $k => $c)
                                <option value="{{ $k }}" {{ $k == $carer['center'] ? 'SELECTED' : '' }}>{{ $c }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-center" class="form-label">狀態</label>
                        <select class="custom-select" aria-label="select example">
                            <option value="A" {{ $carer['status'] == 'A' ? 'SELECTED' : '' }}>有效</option>
                            <option value="I" {{ $carer['status'] == 'I' ? 'SELECTED' : '' }}>暫停</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                        <button type="button" class="btn btn-secondary">列印護老者證</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
