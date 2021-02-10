@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item active" aria-current="page">導師費用</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="input-income" class="form-label">活動總金額</label>
                        <input type="text" class="form-control" id="input-income" value="4800" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-register-count" class="form-label">總人數</label>
                        <input type="text" class="form-control" id="input-register-count" value="20" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-admin-cost" class="form-label">行政費</label>
                        <input type="text" class="form-control" id="input-admin-cost" value="200">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-salary" class="form-label">計算淨金額</label>
                        <input type="text" class="form-control" id="input-salary" value="4600">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection