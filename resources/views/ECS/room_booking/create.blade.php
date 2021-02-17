@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/room_booking">預約房間</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增預約</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-room" class="form-label">房間</label>
                            <select class="form-control" id="field-room">
                                <option value=""></option>
                                @foreach($rooms as $k => $r)
                                    <option value="{{ $k }}">{{ $r }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-amount" class="form-label">會議內容</label>
                            <input type="text" class="form-control" id="input-amount">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-start-time" class="form-label">開始時間</label>
                            <input type="datetime-local" class="form-control" id="input-start-time">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-end-time" class="form-label">結束時間</label>
                            <input type="datetime-local" class="form-control" id="input-end-time">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-team" class="form-label">使用單位</label>
                            <input type="text" class="form-control" id="input-team">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-contact-person" class="form-label">聯絡人</label>
                            <input type="text" class="form-control" id="input-contact-person">
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
