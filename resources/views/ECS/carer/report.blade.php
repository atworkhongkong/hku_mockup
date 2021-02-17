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
                <form class="form" action="/ecs/carer/report" method="GET">
                    <!--
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    -->

                    <div class="row mb-2 g-0">
                        @if ($type != 'accumulate')
                            <div class="col-auto">
                                <label class="sr-only" for="field-start-date">開始日期</label>
                                <input type="date" id="field-start-date" class="form-control" />
                            </div>
                            <div class="col-auto px-0 pt-2">
                                至
                            </div>
                        @endif

                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-02-18" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到1筆記錄</span>
                    </div>

                    @if ($type == 'new')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'accumulate')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>52</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'transfer')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'reactivate')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'close')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'turnover')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                    @elseif ($type == 'active')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>28</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
