@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/room_booking">預約房間</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $booking['purpose'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-room" class="form-label">房間</label>
                            <select class="form-control" id="input-room">
                                <option value=""></option>
                                @foreach($rooms as $k => $r)
                                    <option value="{{ $k }}" {{ $k == $booking['room_id'] ? 'SELECTED' : '' }}>{{ $r['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>預約時段</span>
                            <button type="button" class="btn btn-primary">新增時段</button>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">開始時間</th>
                                    <th scope="col">結束時間</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="datetime-local" class="form-control" id="input-start-time" value="{{ $booking['start_time'] }}">
                                    </td>
                                    <td>
                                        <input type="datetime-local" class="form-control" id="input-end-time" value="{{ $booking['end_time'] }}">
                                    </td>
                                    <td><i class="far fa-trash"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-purpose" class="form-label">會議內容</label>
                            <input type="text" class="form-control" id="input-purpose" value="{{ $booking['purpose'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-people-count" class="form-label">房間使用人數</label>
                            <input type="number" class="form-control" id="input-people-count" value="{{ $booking['people_count'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-educational-levels" class="form-label">設備</label>
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
                            <input type="text" class="form-control" id="input-team" value="ECS">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-contact-person" class="form-label">聯絡人</label>
                            <input type="text" class="form-control" id="input-contact-person" value="{{ $booking['contact_person'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">更 新</button>
                            <button type="submit" class="btn btn-secondary">取消預約</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
