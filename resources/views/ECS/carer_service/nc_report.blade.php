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

            <style>
                table th {
                    font-size: 0.8rem;
                }
            </style>

            <div class="row">
                <div class="col-12 mb-3">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">2021-04</th>
                                <th scope="col">2021-05</th>
                                <th scope="col">2021-06</th>
                                <th scope="col">2021-07</th>
                                <th scope="col">2021-08</th>
                                <th scope="col">2021-09</th>
                                <th scope="col">2021-10</th>
                                <th scope="col">2021-11</th>
                                <th scope="col">2021-12</th>
                                <th scope="col">2022-01</th>
                                <th scope="col">2022-02</th>
                                <th scope="col">2022-03</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="13">OS13c</td>
                            </tr>
                            @foreach($services1 as $row => $service)
                                <tr>
                                    <td>{{ $service['text']}}
                                    @foreach($service['data'] as $d)
                                        <td>{{ $d }}</td>
                                    @endforeach
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="13">OS13d</td>
                            </tr>
                            @foreach($services2 as $row => $service)
                                <tr>
                                    <td>{{ $service['text']}}
                                    @foreach($service['data'] as $d)
                                        <td>{{ $d }}</td>
                                    @endforeach
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="13">OS13c</td>
                            </tr>
                            @foreach($services3 as $row => $service)
                                <tr>
                                    <td>{{ $service['text']}}
                                    @foreach($service['data'] as $d)
                                        <td>{{ $d }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--
                    <div class="alert alert-primary" role="alert">
                        提示︰
                        <ul>
                            <li>購物: 護老者在該查詢的月份內，曾經購物的人數。</li>
                            <li>租借: 護老者在該查詢的月份內，有使過租借物的人數。</li>
                            <li>護老者活動: 護老者在該查詢的月份內，有參加過機構舉辦的「護老者活動」的人數。</li>
                            <li>電話慰問: 護老者在該查詢的月份內，曾參與電話慰問的人數。</li>
                        </ul>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection
