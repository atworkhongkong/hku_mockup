@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">隱蔽長者統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.hidden_elderly_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/hidden_elderly/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
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
                th, td {
                    font-size: 0.9rem;
                }
            </style>

            <div class="row">
                <div class="col-12 mb-3">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">Month</th>
                                <th scope="col">No. of active case b/f from last month<br>(i)</th>
                                <th scope="col">No. of new case<br>(ii)</th>
                                <th scope="col">No. of reactivated case<br>(iii)</th>
                                <th scope="col">No. of closed case<br>(iv)</th>
                                <th scope="col">No. of active case as at the end of this month<br>(v)=(i)+(ii)+(iii)-(iv)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rows as $date => $data)
                                <tr>
                                    <td>{{ $date }}</td>
                                    @foreach($data as $d)
                                        <td>{{ $d }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td>&nbsp;</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>37</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="alert alert-primary" role="alert">
                        提示︰

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
