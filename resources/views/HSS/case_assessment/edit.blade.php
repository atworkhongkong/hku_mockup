@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/case">個案</a></li>
                    <li class="breadcrumb-item active">個案評估 - {{ $case['name'] }}</li>
                </ol>
            </nav>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-page-1" role="tab" aria-controls="nav-page-1" aria-selected="true">
                        基本資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#nav-page-2" role="tab" aria-controls="nav-page-2" aria-selected="false">
                        居住
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#nav-page-3" role="tab" aria-controls="nav-page-3" aria-selected="false">
                        家庭及經濟
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#nav-page-4" role="tab" aria-controls="nav-page-4" aria-selected="false">
                        健康
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#nav-page-5" role="tab" aria-controls="nav-page-5" aria-selected="false">
                        社交及心理
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-6" data-toggle="tab" href="#nav-page-6" role="tab" aria-controls="nav-page-6" aria-selected="false">
                        營養
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-7" data-toggle="tab" href="#nav-page-7" role="tab" aria-controls="nav-page-7" aria-selected="false">
                        自我照顧
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-8" data-toggle="tab" href="#nav-page-8" role="tab" aria-controls="nav-page-8" aria-selected="false">
                        溝通
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-9" data-toggle="tab" href="#nav-page-9" role="tab" aria-controls="nav-page-9" aria-selected="false">
                        理遺
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-10" data-toggle="tab" href="#nav-page-10" role="tab" aria-controls="nav-page-10" aria-selected="false">
                        支援
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-11" data-toggle="tab" href="#nav-page-11" role="tab" aria-controls="nav-page-11" aria-selected="false">
                        結果
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-12" data-toggle="tab" href="#nav-page-12" role="tab" aria-controls="nav-page-12" aria-selected="false">
                        計劃
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3 border border-top-0" id="nav-page-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    @include('HSS.case_assessment.personal_info')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    @include('HSS.case_assessment.living')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-3" role="tabpanel" aria-labelledby="nav-tab-3">
                    @include('HSS.case_assessment.family')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-4" role="tabpanel" aria-labelledby="nav-tab-4">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-5" role="tabpanel" aria-labelledby="nav-tab-5">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-6" role="tabpanel" aria-labelledby="nav-tab-6">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-7" role="tabpanel" aria-labelledby="nav-tab-7">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-8" role="tabpanel" aria-labelledby="nav-tab-8">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-9" role="tabpanel" aria-labelledby="nav-tab-9">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-10" role="tabpanel" aria-labelledby="nav-tab-10">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-11" role="tabpanel" aria-labelledby="nav-tab-11">

                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-12" role="tabpanel" aria-labelledby="nav-tab-12">

                </div>
            </div>
        </div>
    </div>
@endsection
