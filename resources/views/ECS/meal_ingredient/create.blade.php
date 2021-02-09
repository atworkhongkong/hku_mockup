@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/meal_ingredient">膳食庫存</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增膳食庫存</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-12 mb-3">
                        <label for="input-name" class="form-label">食物名稱</label>
                        <input type="text" class="form-control" id="input-name">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-amount" class="form-label">新增數量</label>
                        <input type="text" class="form-control" id="input-amount">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
