@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">預約房間</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/room_booking" method="GET">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <label class="sr-only" for="field-room">房間</label>
                            <select class="form-control mr-2" id="field-room">
                                @foreach($rooms as $k => $r)
                                    <option value="{{ $k }}">{{ $r }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/room_booking" class="btn btn-primary">
                    <i class="fas fa-list"></i> 列表模式
                </a>
                <a href="/ecs/room_booking/calendar" class="btn btn-outline-primary">
                    <i class="fas fa-calendar-alt"></i> 行事曆模式
                </a>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($bookings) }}筆記錄</span>
                        <div>
                            <a href="/ecs/room_booking/create" class="btn btn-secondary">新增預約</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">房間</th>
                                <th scope="col">會議內容</th>
                                <th scope="col">聯絡人</th>
                                <th scope="col">開始時間</th>
                                <th scope="col">結束時間</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $k => $b)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $rooms[$b['room_id']] }}</td>
                                    <td>{{ $b['purpose'] }}</td>
                                    <td>{{ $b['contact_person'] }}</td>
                                    <td>{{ $b['start_time'] }}</td>
                                    <td>{{ $b['end_time'] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/room_booking/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
