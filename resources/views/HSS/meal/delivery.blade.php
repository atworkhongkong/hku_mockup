@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
            <form class="form-inline" action="/hss/meal/delivery" method="GET">
                <label class="sr-only" for="field-date">日期</label>
                <input type="date" id="field-date" class="form-control mr-2" value="2021-01-21" />

                <label class="sr-only" for="field-month">月份</label>
                <select id="field-month" class="form-control mr-2" name="month">
                    <option value="">請選擇時段</option>
                    <option value="am">上午</option>
                    <option value="pm">下午</option>
                </select>
                <button type="submit" class="btn btn-primary">搜尋</button>
            </form>
        </div>

        <div class="content__wrapper">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="care-worker-tab" data-toggle="tab" href="#tab-care-worker" role="tab" aria-controls="tab-care-worker" aria-selected="true">送飯員</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="district-tab" data-toggle="tab" href="#tab-district" role="tab" aria-controls="tab-district" aria-selected="false">顯示區域</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-care-worker" role="tabpanel" aria-labelledby="care-worker-tab">
                    <div class="border p-3">
                        @for($i = 1 ; $i <= count($care_workers) ; $i++)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="inlineCheckbox{{ $i }}"
                                    value="option{{ $i }}"
                                    {{ $i <= $available_care_worker ? "CHECKED": "" }}
                                >
                                <label class="form-check-label" for="inlineCheckbox{{ $i }}">{{ $care_workers[$i - 1] }}</label>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-district" role="tabpanel" aria-labelledby="district-tab">
                    <div class="border p-3">
                        @foreach($delivery_routes as $k => $dr)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input dr-checkbox"
                                    type="checkbox"
                                    id="dr-checkbox{{ $k }}"
                                    value="{{ $dr }}"
                                    CHECKED
                                >
                                <label class="form-check-label" for="dr-checkbox{{ $k }}">{{ $dr }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--
            <div class="mb-3">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#care-worker-list" role="button" aria-expanded="false" aria-controls="collapseExample">
                        送飯員
                    </a>
                </p>
                <div class="collapse" id="care-worker-list">
                    <div class="border p-3">
                        @for($i = 1 ; $i <= count($care_workers) ; $i++)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="inlineCheckbox{{ $i }}"
                                    value="option{{ $i }}"
                                    {{ $i <= $available_care_worker ? "CHECKED": "" }}
                                >
                                <label class="form-check-label" for="inlineCheckbox{{ $i }}">{{ $care_workers[$i - 1] }}</label>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#delivery-route-check-boxes" role="button" aria-expanded="false" aria-controls="collapseExample">
                        顯示區域
                    </a>
                </p>
                <div class="collapse" id="delivery-route-check-boxes">
                    <div class="border p-3">
                        @foreach($delivery_routes as $k => $dr)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input dr-checkbox"
                                    type="checkbox"
                                    id="dr-checkbox{{ $k }}"
                                    value="{{ $dr }}"
                                    CHECKED
                                >
                                <label class="form-check-label" for="dr-checkbox{{ $k }}">{{ $dr }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            -->

            <hr class="my-4">


            <p class="text-right">
                <a class="btn btn-primary" href="/hss/meal/delivery/print" target="_blank">列印飯紙</a>
            </p>
            <div class="row">
                <div class="col">
                    @for($i = 1 ; $i <= $available_care_worker ; $i++)
                        <div class="row pb-4 mb-4 border-bottom delivery-row">
                            <div class="col-auto">
                                <div class="text-center">
                                    <div class="mb-1 p-1 border">
                                        <img src="{{ asset('images/care_worker.jpg') }}" style="width:80px; height:80px;" />
                                    </div>
                                    <div class="badge badge-info py-1 px-3">{{ $care_workers[$i - 1] }}</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <select class="custom-select delivery-row-pull-down" aria-label="select example" style="width:150px;">
                                    <option selected>負責區域</option>
                                    @foreach($delivery_routes as $k => $dr)
                                        <option value="{{ $dr }}" {{ ceil($i/3) == $k ? "SELECTED" : "" }}>{{ $dr }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col d-flex flex-wrap">
                                @for($j = 1 ; $j <= $cw_delivery_counts[$i] ; $j++)
                                    <?php
                                        $temp_arr = ['海怡', '石排灣', '漁光村', '利東', '華富', '中西區'];
                                        $k = ceil($i/3);
                                        $temp_name = $temp_arr[$k - 1];
                                    ?>
                                    <div class="card mr-2 mb-2" style="width:6rem; cursor:pointer;">
                                        <div class="card-body p-2 text-center">
                                            <div style="background-color: #EEEEEE;">{{ $temp_name }}</div>
                                            <div>6座628</div>
                                            <div><span>xxx</span> | <span>310</span></div>
                                            <div>楊心怡</div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-1">
                    <div id="meal-card-container" style="position:-webkit-sticky; position:sticky; top:10px; width:10rem;">
                        <div class="border p-2 text-center">服務使用者</div>
                        <div style="overflow-y:scroll; height:70vh; " class="border">
                            <div>
                                @for ($i = 1 ; $i <= $max_service_users ; $i++)
                                    <div class="card m-2" style="width:6rem; cursor:pointer; user-select:none;">
                                        <div class="card-body p-2 text-center">
                                            <div style="background-color: #EEEEEE;">海怡</div>
                                            <div>6座628</div>
                                            <div><span>xxx</span> | <span>310</span></div>
                                            <div>楊心怡</div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(function() {
            $(".dr-checkbox").click(function() {
                let route = $(this).val();
                let showHide = $(this).is(":checked") ? 'show' : 'hide';
                $(".delivery-row-pull-down").each(function(i) {
                    if ($(this).val() === route) {
                        if (showHide === 'hide') {
                            $(this).parent().closest('div.delivery-row').hide();
                        } else {
                            $(this).parent().closest('div.delivery-row').show();
                        }
                    }
                })
            });
        });
    </script>
@endsection
