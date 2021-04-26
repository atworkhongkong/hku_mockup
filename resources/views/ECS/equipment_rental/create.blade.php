@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/equipment_rental">租借儀器</a></li>
                    <li class="breadcrumb-item active" aria-current="page">租借儀器</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">中心</label>
                            <select id="input-center" class="form-control mr-2">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k  == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-person" class="form-label">身份</label>
                            <select class="form-control" id="input-person">
                                <option value="">護老者</option>
                                <option value="">長者會員</option>
                                <option value="">職員</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-code" class="form-label">識別編號</label>
                            <input type="text" class="form-control" id="input-code">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-equipment" class="form-label">儀器</label>
                            <select class="form-control" id="input-equipment">
                                <option value=""></option>
                                @foreach($equipments as $k => $e)
                                    <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-reference-number" class="form-label">參考編號 (如適用)</label>
                            <input type="text" class="form-control" id="input-reference-number" value="56018205">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-available" class="form-label">現存件數</label>
                            <input type="text" class="form-control" id="input-available" value="5" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-equipment" class="form-label">租借期限</label>
                            <select class="form-control" id="input-equipment">
                                @foreach($rental_time as $k => $t)
                                    <option value="{{ $k }}">{{ $t }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-start-date" class="form-label">租借日期</label>
                            <input type="text" class="form-control" id="input-start-date" value="2021-02-01" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-end-date" class="form-label">歸還日期</label>
                            <input type="text" class="form-control" id="input-end-date" value="2021-03-01">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-equipment" class="form-label">付款方式</label>
                            <select class="form-control" id="input-equipment">
                                <option>現金</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提交及列印收據</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
