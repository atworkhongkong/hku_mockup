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
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
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
                        <div class="col-12 mb-3">
                            <label for="input-room" class="form-label">房間</label>
                            <select class="form-control" id="input-room">
                                <option value=""></option>
                                @foreach($rooms as $k => $r)
                                    <option value="{{ $k }}">{{ $r['name'] }}</option>
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
                        <div class="col-12 mb-3">
                            <label for="input-people-count" class="form-label">房間使用人數</label>
                            <input type="number" class="form-control" id="input-people-count">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-educational-levels" class="form-label">教育程度</label>
                            <div>
                                @foreach($equipments as $k => $v)
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="equipment-{{$k}}">
                                        <label class="form-check-label" for="equipment-{{$k}}">
                                            {{$v}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
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

        <div class="alert alert-primary mt-3" role="alert">
            提示︰當提交後，系統可否發出電郵通知同事已成功提交，並在使用時間開始前30分鐘發多一封email給同事?
        </div>
    </div>
@endsection
