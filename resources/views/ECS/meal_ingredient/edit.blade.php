@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/meal_ingredient">膳食庫存</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $ingredient['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-12 mb-3">
                        <label for="input-name" class="form-label">食物名稱</label>
                        <input type="text" class="form-control" id="input-name" value="{{ $ingredient['name'] }}">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-increase" class="form-label">新增數量</label>
                        <input type="text" class="form-control" id="input-increase">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-decrease" class="form-label">減少數量</label>
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
