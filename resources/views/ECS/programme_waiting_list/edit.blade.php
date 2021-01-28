@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme_waiting_list/2">後補名單</a></li>
                    <li class="breadcrumb-item active" aria-current="page">編輯</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="03EL300102">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-date" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-date" value="陳永仁">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-mobile" class="form-label">手提電話</label>
                            <input type="text" class="form-control" id="input-mobile" value="96969696">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-mobile" class="form-label">申請日期</label>
                            <input type="text" class="form-control" id="input-mobile" value="2021-01-05" readonly>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">更 新</button>
                            <button type="submit" class="btn btn-danger">刪 除</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
