@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme_attendance/2">出席記錄</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增出席記錄</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-date" class="form-label">日期</label>
                            <input type="text" class="form-control" id="input-date">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-attend" class="form-label">出席人數</label>
                            <input type="text" class="form-control" id="input-attend">
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
