@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/room">房間</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增房間</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-name" class="form-label">房間</label>
                            <input type="text" class="form-control" id="input-name" name="name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-location" class="form-label">位置</label>
                            <input type="text" class="form-control" id="input-location" name="location">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-capacity" class="form-label">容納人數</label>
                            <input type="text" class="form-control" id="input-capacity" name="capacity">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-description" class="form-label">簡介</label>
                            <input type="text" class="form-control" id="input-description">
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
