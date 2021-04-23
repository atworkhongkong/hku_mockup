@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">護老者</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/carer" method="GET" onsubmit="return false;">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-type">類別</label>
                    <select id="field-type" class="form-control mr-2" name="center">
                        <option value=""></option>
                        <option value="code">護老者編號</option>
                        <option value="oc">(有需要)護老者姓名</option>
                        <option value="pc">被護老者姓名</option>
                        <option value="hkid">身份證號碼</option>
                    </select>

                    <label class="sr-only" for="field-key-word">關鍵字</label>
                    <input type="text" class="form-control mr-2" id="field-key-word" placeholder="關鍵字">

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                    <button class="btn btn-primary" data-toggle="collapse" data-target="#more-search" aria-expanded="false" aria-controls="more-search">進階搜尋</button>

                    <div class="collapse mt-2" id="more-search" style="width:100%;">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label justify-content-start font-weight-bold">長期照顧</label>
                                    <div>
                                        <div class="form-check-inline mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="long-term-care" CHECKED>
                                            <label class="form-check-label" for="long-term-care">
                                                長期照顧
                                            </label>
                                        </div>
                                        <div class="form-check-inline mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="no-long-term-care" CHECKED>
                                            <label class="form-check-label" for="no-long-term-care">
                                                無需長期照顧
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label justify-content-start font-weight-bold">照顧者最想參加的服務</label>
                                    <div>
                                        @foreach($form4_cb as $k => $f)
                                            <div class="form-check-inline mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck{{$k}}">
                                                <label class="form-check-label" for="defaultCheck{{$k}}">
                                                    {{$f}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="input-living-status" class="form-label justify-content-start font-weight-bold">被照顧者患有疾病</label>
                                    <div>
                                        @foreach($form5_cb_4 as $k => $f)
                                            <div class="form-check-inline mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck{{$k}}">
                                                <label class="form-check-label" for="defaultCheck{{$k}}">
                                                    {{$f}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到10筆記錄</span>
                        <div>
                            <a href="/ecs/carer/create" class="btn btn-secondary">新增護老者</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">護老者</th>
                                <th scope="col">類別</th>
                                <th scope="col">被護老者</th>
                                <th scope="col">登記日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carers as $k => $v)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['type'] }}</td>
                                    <td>{{ $v['target'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $statuses[$v['status']] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/carer/{{ $k }}/edit">編輯</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
