@extends('layouts.master')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>

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
                <a href="/ecs/room_booking" class="btn btn-outline-primary">
                    <i class="fas fa-list"></i> 列表模式
                </a>
                <a href="/ecs/room_booking/calendar" class="btn btn-primary">
                    <i class="fas fa-calendar-alt"></i> 行事曆模式
                </a>
            </div>

            <div class="row">
                <div class="col-12">
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

