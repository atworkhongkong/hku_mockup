@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/volunteer_team">義工小組</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $team['chi_name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}" {{ $team['center_id'] == $k ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">義工小組中文名稱</label>
                            <input type="text" class="form-control" id="input-chi-name" value="{{ $team['chi_name'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">義工小組英文名稱</label>
                            <input type="text" class="form-control" id="input-eng-name" value="{{ $team['eng_name'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-in-charge" class="form-label">聯絡人</label>
                            <input type="text" class="form-control" id="input-in-charge" value="{{ $team['contact_person'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-status" class="form-label">狀態</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($statuses as $k => $c)
                                    <option value="{{ $k }}" {{ $team['status'] == $k ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-create_date" class="form-label">建立日期</label>
                            <input type="text" class="form-control" id="input-create_date" value="{{ $team['create_date'] }}" readonly>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
