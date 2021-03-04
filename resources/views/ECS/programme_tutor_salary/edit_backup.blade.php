@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/2/edit">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item active" aria-current="page">導師費用</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/2/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme_attendance/2" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme_waiting_list/2" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme_tutor_salary/2" class="btn btn-primary">導師費用</a>
            </div>

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
