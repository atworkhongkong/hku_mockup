@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">護老者統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.carer_report_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/carer_service/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <select class="custom-select" aria-label="Default select example">
                                <option selected>04/2021 - 03/2022</option>
                                <option>04/2020 - 03/2021</option>
                                <option>04/2019 - 03/2020</option>
                                <option>04/2018 - 03/2019</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到 {{ count($services) }}筆記錄</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">購物</th>
                                <th scope="col">租借</th>
                                <th scope="col">護老者活動</th>
                                <th scope="col">電話慰問</th>
                                <th scope="col">總次數</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $row_total = ['purchase' => 0, 'rental' => 0, 'programme' => 0, 'phone' => 0]; ?>
                            @foreach($services as $k => $v)
                                <?php
                                    $col_total = $v['purchase'] + $v['rental'] + $v['programme'] + $v['phone'];
                                    $row_total['purchase'] += $v['purchase'];
                                    $row_total['rental'] += $v['rental'];
                                    $row_total['programme'] += $v['programme'];
                                    $row_total['phone'] += $v['phone'];
                                ?>
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $v['purchase'] }}</td>
                                    <td>{{ $v['rental'] }}</td>
                                    <td>{{ $v['programme'] }}</td>
                                    <td>{{ $v['phone'] }}</td>
                                    <td>{{ $col_total }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>{{ $row_total['purchase'] }}</td>
                                <td>{{ $row_total['rental'] }}</td>
                                <td>{{ $row_total['programme'] }}</td>
                                <td>{{ $row_total['phone'] }}</td>
                                <td>{{ array_sum($row_total) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                        提示︰
                        <ul>
                            <li>購物: 護老者在該查詢的月份內，曾經購物的人數。</li>
                            <li>租借: 護老者在該查詢的月份內，有使過租借物的人數。</li>
                            <li>護老者活動: 護老者在該查詢的月份內，有參加過機構舉辦的「護老者活動」的人數。</li>
                            <li>電話慰問: 護老者在該查詢的月份內，曾參與電話慰問的人數。</li>
                        </ul>
                        注意事項︰
                        <div>
                            因這部份我們想知道每個月的「newly served」，所以在計算每個月份的數字時，須要排除過去對上的所有月份(同一財政年度內)重覆的人。<br>
                            例如4/2021，A, B, C 三人曾使用購物，所以數字會是3人<br>
                            到了5/2021，A, B, C, D, E 五人都曾經購物，但當中只有D, E是新的，所以數字會是2人<br>
                            SQL有點類似:<br>
                            4月份:
                            <pre>
                                SELECT COUNT(member_id) FROM shoppings WHERE create_date BETWEEN '2021-04-01' AND '2021-04-30'
                            </pre>
                            5月份︰
                            <pre>
                                SELECT COUNT(member_id) FROM shoppings WHERE member_id NOT IN
                                    (SELECT member_id FROM shoppings WHERE create_date BETWEEN '2021-04-01' AND '2021-04-30')
                                    AND
                                    create_date BETWEEN '2021-05-01' AND '2021-05-31'
                            </pre>
                            6月份︰
                            <pre>
                                SELECT COUNT(member_id) FROM shoppings WHERE member_id NOT IN
                                    (SELECT member_id FROM shoppings WHERE create_date BETWEEN '2021-04-01' AND '2021-05-31')
                                    AND
                                    create_date BETWEEN '2021-06-01' AND '2021-06-30'
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
