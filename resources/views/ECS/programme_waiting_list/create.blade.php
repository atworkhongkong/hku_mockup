@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme_waiting_list/2">後補名單</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增後補名單</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-date" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-date">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-register-type" class="form-label">姓別</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="first-in" selected>男</option>
                                <option value="draw">女</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-mobile" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-mobile">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
