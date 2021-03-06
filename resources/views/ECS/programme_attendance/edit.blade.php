@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/2/edit">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/2/attendance">出席記錄</a></li>
                    <li class="breadcrumb-item active" aria-current="page">編輯</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-date" class="form-label">日期</label>
                            <input type="text" class="form-control" id="input-date" value="2021-03-01">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-attend" class="form-label">出席人數</label>
                            <input type="text" class="form-control" id="input-attend" value="16">
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
