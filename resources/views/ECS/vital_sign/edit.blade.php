@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/vital_sign">生命表徵</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增紀錄</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="input-systolic" class="form-label">上壓</label>
                            <input type="text" class="form-control" id="input-systolic" value="{{ $vital_sign['systolic'] }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="input-diastolic" class="form-label">下壓</label>
                            <input type="text" class="form-control" id="input-diastolic" value="{{ $vital_sign['diastolic'] }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="input-pulse" class="form-label">心跳</label>
                            <input type="text" class="form-control" id="input-pulse" value="{{ $vital_sign['pulse'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-height" class="form-label">身高</label>
                            <input type="text" class="form-control" id="input-height" value="{{ $vital_sign['height'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-weight" class="form-label">體重</label>
                            <input type="text" class="form-control" id="input-weight" value="{{ $vital_sign['weight'] }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
