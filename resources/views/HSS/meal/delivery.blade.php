@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/meal">膳食</a></li>
                    <li class="breadcrumb-item active" aria-current="page">飯線</li>
                </ol>
            </nav>

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
                    <i class="far fa-info-circle mx-2" title="當選擇了過去的日期，下方的所有欄位皆會變成read-only"></i>
                </form>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="care-worker-tab" data-toggle="tab" href="#tab-care-worker" role="tab" aria-controls="tab-care-worker" aria-selected="true">
                        送飯員<i class="far fa-info-circle mx-2" title="剔選送飯員後，則表示送飯員已被安排了送飯工作。若取消勾選，已安排之送飯工作則會被重設。"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="borrow-care-worker-tab" data-toggle="tab" href="#tab-borrow-care-worker" role="tab" aria-controls="tab-borrow-care-worker" aria-selected="false">
                        借用送飯員
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-care-worker" role="tabpanel" aria-labelledby="care-worker-tab">
                    <div class="border p-3">
                        @foreach($care_workers as $i => $cw)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="inlineCheckbox{{ $i }}"
                                    value="option{{ $i }}"
                                    {{ $i >= 20 ? "disabled" : "" }}
                                    {{ $cw['route_id'] != 0 ? "CHECKED": "" }}
                                >
                                <label class="form-check-label" for="inlineCheckbox{{ $i }}">
                                    {{ $cw['name'] }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-borrow-care-worker" role="tabpanel" aria-labelledby="borrow-care-worker-tab">
                    <div class="border p-3">
                        @for($i = 1 ; $i <= count($borrow_care_workers) ; $i++)
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="inlineBorrowCheckbox{{ $i }}"
                                    value="option{{ $i }}"
                                >
                                <label class="form-check-label" for="inlineBorrowCheckbox{{ $i }}">
                                    {{ $borrow_care_workers[$i - 1] }}<i class="far fa-info-circle mx-2" title="2021-01-21 至 2021-01-21"></i>
                                </label>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="text-right">

            </p>

            <div class="d-flex justify-content-between">
                <div class="m-2">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="router-filter-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            顯示路線
                        </button>
                        <div class="dropdown-menu p-3" aria-labelledby="router-filter-button" style="min-width:350px;">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check-all-routes" CHECKED>全選</button>
                                <label class="form-check-label" for="check-all-routes"></label>
                            </div>
                            @foreach($delivery_routes as $k => $dr)
                                <div class="form-check">
                                    <input
                                        class="form-check-input dr-checkbox"
                                        type="checkbox"
                                        id="dr-checkbox{{ $k }}"
                                        value="{{ $dr }}"
                                        CHECKED
                                    >
                                    <label class="form-check-label" for="dr-checkbox{{ $k }}">{{ $dr }} ({{ count($meal_users[$k]) }})</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <a class="btn btn-primary" href="/hss/meal/delivery?step=3">自動排列</a>
                    <a class="btn btn-primary" href="/hss/meal/delivery/print" target="_blank">列印飯紙</a>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <?php
                    $last_route_id = 0;
                    ?>
                    @foreach($care_workers as $i => $cw)
                        <?php
                        if ($cw['route_id'] != $last_route_id) {
                            $row = 1;
                            $last_route_id = $cw['route_id'];
                        } else {
                            $row += 1;
                        }
                        ?>
                        @if ($cw['route_id'] != 0)
                            <div class="row pb-4 mb-4 border-bottom delivery-row">
                                <div class="col-auto">
                                    <div class="text-center">
                                        <div class="mb-1 p-1 border">
                                            <img src="{{ asset('images/care_worker.jpg') }}" style="width:80px; height:80px;" />
                                        </div>
                                        <div class="badge badge-info py-1 px-3">{{ $cw['name'] }}</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <select class="custom-select delivery-row-pull-down" aria-label="select example" style="width:150px;">
                                        <option selected>負責區域</option>
                                        @foreach($delivery_routes as $k => $dr)
                                            @if($step == 1)
                                                <option value="{{ $dr }}">{{ $dr }}</option>
                                            @else
                                                <option value="{{ $dr }}" {{ $k == $cw['route_id'] ? "SELECTED" : "" }}>{{ $dr }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col d-flex flex-wrap">
                                    @if ($step <= 2)

                                    @else
                                        <?php
                                            $total_meal_in_this_route = count($meal_users[$cw['route_id']]);
                                            $total_cw_in_this_route = $route_care_worker_count[$cw['route_id']];
                                            $average = ceil($total_meal_in_this_route / $total_cw_in_this_route);
                                            $from = ($row - 1) * $average;
                                            $to = $from + $average - 1;
                                            if ($to > $total_meal_in_this_route) {
                                                $to = $total_meal_in_this_route - 1;
                                            }
                                        ?>
                                        @for($m = $from ; $m <= $to ; $m++)
                                            <?php
                                            $arr = $meal_users[$cw['route_id']][$m];
                                            ?>
                                            <div class="card mr-2 mb-2 card-{{ $cw['route_id'] }}" style="width:6rem;">
                                                <div class="card-body p-2 text-center">
                                                    <div><input type="checkbox" id="row-{{ $cw['route_id'] }}-{{ $m }}"/></div>
                                                    <label class="form-check-label" for="row-{{ $cw['route_id'] }}-{{ $m }}" style="width:100%;">
                                                        <div style="background-color: #EEEEEE;">{{$arr['block'] }}</div>
                                                        <div>{{ $arr['floor'] }}樓{{ $arr['room'] }}</div>
                                                        <div><span>{{ $arr['number'] }}</span></div>
                                                        <div>{{ $arr['name'] }}</div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-1">
                    <div id="meal-card-container" style="position:-webkit-sticky; position:sticky; top:10px; width:10rem;">
                        <div class="border p-2 text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#move-to-modal">移至...</button>
                        </div>
                        <div class="border p-2 text-center">待定</div>
                        <div style="overflow-y:scroll; height:70vh; " class="border">
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('HSS.meal.move_to_modal')
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

            $("#check-all-routes").click(function() {
                let is_shown = $(this).is(":checked");
                $(".dr-checkbox").prop('checked', is_shown);
                if (is_shown) {
                    $(".delivery-row-pull-down").parent().closest('div.delivery-row').show();
                } else {
                    $(".delivery-row-pull-down").parent().closest('div.delivery-row').hide();
                }
            });
        });
    </script>

    <style>
        .card-1 { background-color: #FFFFBF; }
        .card-2 { background-color: #DDDAD7; }
        .card-3 { background-color: #7BC7F7; }
    </style>
@endsection
