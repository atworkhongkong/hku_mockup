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
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="{{ $rental['member_code'] }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-equipment" class="form-label">儀器</label>
                            <select class="form-control" id="input-equipment" disabled>
                                <option value=""></option>
                                @foreach($equipments as $k => $e)
                                    <option value="{{ $k }}" {{ $rental['equipment_id'] == $k ? 'SELECTED' : '' }}>{{ $e['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-count" class="form-label">件數</label>
                            <select class="form-control" id="input-count" disabled>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-reference-number" class="form-label">參考編號</label>
                            <input type="text" class="form-control" id="input-reference-number" value="56018205" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-fee" class="form-label">費用</label>
                            <input type="text" class="form-control" id="input-fee" value="$10" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-fee" class="form-label">費用</label>
                            <input type="text" class="form-control" id="input-fee" value="$10" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-invoice" class="form-label">收據編號</label>
                            <input type="text" class="form-control" id="input-invoice" value="A000123" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-create-date" class="form-label">租借日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="2021-02-01 13:00" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-create-date" class="form-label">預計歸還日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="2021-02-15" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-charge" class="form-label">欠款</label>
                            <input type="text" class="form-control" id="input-charge" value="0" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">歸還及列印收據</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
