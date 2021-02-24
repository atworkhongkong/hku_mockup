@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/holiday">假期</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增假期</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-date" class="form-label">日期</label>
                            <input type="date" class="form-control" id="input-date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-desc" class="form-label">備註</label>
                            <input type="text" class="form-control" id="input-desc">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
