@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/case">個案</a></li>
                    <li class="breadcrumb-item active" aria-current="page">個案申請及轉介</li>
                </ol>
            </nav>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-page-1" role="tab" aria-controls="nav-page-1" aria-selected="true">
                        個人資料
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#nav-page-2" role="tab" aria-controls="nav-page-2" aria-selected="false">
                        經濟情況
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#nav-page-3" role="tab" aria-controls="nav-page-3" aria-selected="false">
                        家庭及健康
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#nav-page-4" role="tab" aria-controls="nav-page-4" aria-selected="false">
                        服務申請
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#nav-page-5" role="tab" aria-controls="nav-page-5" aria-selected="false">
                        聯絡人
                    </a>
                    <a class="nav-item nav-link" id="nav-tab-6" data-toggle="tab" href="#nav-page-6" role="tab" aria-controls="nav-page-6" aria-selected="false">
                        轉介人
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3 border border-top-0" id="nav-page-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    @include('HSS.case.personal_info')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    @include('HSS.case.finance')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-3" role="tabpanel" aria-labelledby="nav-tab-3">
                    @include('HSS.case.family')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-4" role="tabpanel" aria-labelledby="nav-tab-4">
                    @include('HSS.case.service')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-5" role="tabpanel" aria-labelledby="nav-tab-5">
                    @include('HSS.case.contact')
                </div>
                <div class="tab-pane fade p-3 border border-top-0" id="nav-page-6" role="tabpanel" aria-labelledby="nav-tab-6">
                    @include('HSS.case.referral')
                </div>
            </div>
        </div>
    </div>
@endsection
