@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/carer">護老者</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增護老者</li>
                </ol>
            </nav>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-page-1" role="tab" aria-controls="nav-page-1" aria-selected="true">
                        個人資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#nav-page-2" role="tab" aria-controls="nav-page-2" aria-selected="false">
                        照顧情況
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#nav-page-3" role="tab" aria-controls="nav-page-3" aria-selected="false">
                        照顧範疇
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#nav-page-4" role="tab" aria-controls="nav-page-4" aria-selected="false">
                        參加的服務
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#nav-page-5" role="tab" aria-controls="nav-page-5" aria-selected="false">
                        被照顧者資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-6" data-toggle="tab" href="#nav-page-6" role="tab" aria-controls="nav-page-6" aria-selected="false">
                        同意書
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-7" data-toggle="tab" href="#nav-page-7" role="tab" aria-controls="nav-page-7" aria-selected="false">
                        職員填寫
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3 border border-top-0" id="nav-page-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    @include('ECS.carer.create_form_1')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    @include('ECS.carer.create_form_2')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-3" role="tabpanel" aria-labelledby="nav-tab-3">
                    @include('ECS.carer.create_form_3')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-4" role="tabpanel" aria-labelledby="nav-tab-4">
                    @include('ECS.carer.create_form_4')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-5" role="tabpanel" aria-labelledby="nav-tab-5">
                    @include('ECS.carer.create_form_5')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-6" role="tabpanel" aria-labelledby="nav-tab-6">
                    @include('ECS.carer.create_form_6')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-7" role="tabpanel" aria-labelledby="nav-tab-7">
                    @include('ECS.carer.create_form_7')
                </div>
            </div>

        </div>
    </div>
@endsection
