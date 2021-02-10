@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/equipment">儀器</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $equipment['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-12 mb-3">
                        <label for="input-name" class="form-label">儀器</label>
                        <input type="text" class="form-control" id="input-name" value="{{ $equipment['name'] }}">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-count" class="form-label">數量</label>
                        <input type="text" class="form-control" id="input-count" value="{{ $equipment['count'] }}">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection