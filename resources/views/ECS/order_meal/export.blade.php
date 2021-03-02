@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">每週膳食統計報告</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/order_meal/report" method="GET">
                    <label class="sr-only" for="field-date" >日期</label>
                    <input type="date" class="form-control mr-2" id="input-date">

                    <button type="submit" class="btn btn-primary">匯出</button>
                </form>
            </div>
        </div>
    </div>
@endsection
