@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/dcss">智友醫社同行計劃</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $case['name'] }}</li>
                </ol>
            </nav>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-page-1" role="tab" aria-controls="nav-page-1" aria-selected="true">
                        接案評估
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#nav-page-2" role="tab" aria-controls="nav-page-2" aria-selected="false">
                        背景資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#nav-page-3" role="tab" aria-controls="nav-page-3" aria-selected="false">
                        長者個人特質記錄
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#nav-page-4" role="tab" aria-controls="nav-page-4" aria-selected="false">
                        健康情況
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#nav-page-5" role="tab" aria-controls="nav-page-5" aria-selected="false">
                        活動及認知情況
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-6" data-toggle="tab" href="#nav-page-6" role="tab" aria-controls="nav-page-6" aria-selected="false">
                        家庭照顧支援網絡
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-7" data-toggle="tab" href="#nav-page-7" role="tab" aria-controls="nav-page-7" aria-selected="false">
                        補充資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-7" data-toggle="tab" href="#nav-page-8" role="tab" aria-controls="nav-page-8" aria-selected="false">
                        評估分數
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3 border border-top-0" id="nav-page-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    @include('ECS.dcss.case')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    @include('ECS.dcss.personal_info')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-3" role="tabpanel" aria-labelledby="nav-tab-3">
                    @include('ECS.dcss.characteristic')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-4" role="tabpanel" aria-labelledby="nav-tab-4">
                    @include('ECS.dcss.health')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-5" role="tabpanel" aria-labelledby="nav-tab-5">
                    @include('ECS.dcss.cognition')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-6" role="tabpanel" aria-labelledby="nav-tab-6">
                    @include('ECS.dcss.family')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-7" role="tabpanel" aria-labelledby="nav-tab-7">
                    @include('ECS.dcss.additional_info')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-8" role="tabpanel" aria-labelledby="nav-tab-8">
                    @include('ECS.dcss.mark')
                </div>
            </div>
        </div>
    </div>
@endsection
