@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/delivery_route">送飯路線</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增送飯路線</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">路線名稱</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">新 增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
