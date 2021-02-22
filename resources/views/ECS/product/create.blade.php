@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/product">貨品</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增貨品</li>
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
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">貨品</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-amount" class="form-label">數量</label>
                            <input type="text" class="form-control" id="input-amount">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-price" class="form-label">價格</label>
                            <input type="text" class="form-control" id="input-price">
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
