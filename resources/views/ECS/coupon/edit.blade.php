@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/coupon">優惠劵</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $coupon['code'] }} - {{ $coupon['name'] }}</li>
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
                        <div class="col-12 mb-3">
                            <label for="input-code" class="form-label">優惠劵編號</label>
                            <input type="text" class="form-control" id="input-code" value="{{ $coupon['code'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-name" class="form-label">名稱</label>
                            <input type="text" class="form-control" id="input-name" value="{{ $coupon['name'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-expiry-date" class="form-label">最後使用日期</label>
                            <input type="date" class="form-control" id="input-expiry-date" value="{{ $coupon['expiry_date'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-description" class="form-label">簡介</label>
                            <textarea class="form-control" id="input-description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-create-date" class="form-label">建立日期</label>
                            <input type="date" class="form-control" id="input-create-date" value="{{ $coupon['create_date'] }}" disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-created-by" class="form-label">建立者</label>
                            <input type="text" class="form-control" id="input-created-by" value="{{ $coupon['created_by'] }}" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-status" class="form-label">狀態</label>
                            <select class="form-control" id="input-status">
                                @foreach($statuses as $k => $s)
                                    <option value="{{ $k }}" {{ $k == $coupon['status'] ? 'SELECTED' : '' }}>{{ $s }}</option>
                                @endforeach
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
