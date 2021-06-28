@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/hidden_elderly">隱蔽長者</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $hidden_elderly['name'] }}</li>
                </ol>
            </nav>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-page-1" role="tab" aria-controls="nav-page-1" aria-selected="true">
                        基本資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-10" data-toggle="tab" href="#nav-page-2" role="tab" aria-controls="nav-page-10" aria-selected="false">
                        紀錄
                    </a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3 border border-top-0" id="nav-page-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    @include('ECS.hidden_elderly.information')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    @include('ECS.hidden_elderly.recording')
                </div>
            </div>


        </div>
    </div>
@endsection
