@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/product">貨品</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/product/{{ $product_id }}/log">{{ $product['name'] }}</a></li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-12 mb-3">
                        <label for="input-increase" class="form-label">購入數量</label>
                        <input type="text" class="form-control" id="input-increase">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-increase-unit-price" class="form-label">購入單價</label>
                        <input type="text" class="form-control" id="input-increase">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-increase-total-price" class="form-label">購入總價格</label>
                        <input type="text" class="form-control" id="input-increase" readonly>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-decrease" class="form-label">扣減數量</label>
                        <input type="text" class="form-control" id="input-decrease">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
