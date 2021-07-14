@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">個案</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/dcss" method="GET" onsubmit="return false;">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="input-teams">所屬單位</label>
                            <select id="input-teams" class="form-control">
                                @foreach($teams as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-type">類別</label>
                            <select id="field-type" class="form-control mr-1" name="center">
                                <option value=""></option>
                                <option value="code">個案編號</option>
                                <option value="name">申請人姓名</option>
                                <option value="hkid">身份證編號</option>
                                <option value="mobile">電話號碼</option>
                                <option value="address">地址</option>
                            </select>
                        </div>

                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-key-word">關鍵字</label>
                            <input type="text" class="form-control mr-1" id="field-key-word" placeholder="關鍵字">
                        </div>

                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-status">狀態</label>
                            <select id="field-type" class="form-control mr-1">
                                @foreach($statuses as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-auto px-1">
                            <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#more-search" aria-expanded="false" aria-controls="more-search">進階搜尋</button>
                        </div>
                    </div>

                    <div class="collapse mt-2" id="more-search" style="width:100%;">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-auto pr-1">
                                    <label for="field-need-review">個案檢討</label>
                                    <select class="form-control" id="field-need-review">
                                        <option></option>
                                        <option value="1">到期檢討</option>
                                    </select>
                                </div>
                                <div class="col-auto pr-1">
                                    <label for="input-living-status" class="form-label">個案申請日期</label>
                                    <div class="row mb-2 g-0">
                                        <div class="col-auto">
                                            <label class="sr-only" for="field-start-date">開始日期</label>
                                            <input type="date" id="field-start-date" class="form-control" />
                                        </div>
                                        <div class="col-auto px-0 pt-2">
                                            至
                                        </div>
                                        <div class="col-auto">
                                            <label class="sr-only" for="field-end-date">結束日期</label>
                                            <input type="date" id="field-end-date" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto pr-1">
                                    <label for="field-waiting">輪候服務</label>
                                    <select id="field-waiting" class="form-control mr-1">
                                        <option></option>
                                        @foreach($waiting_statuses as $s)
                                            <option value="{{ $s }}">{{ $s }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-auto pr-1">
                                    <label for="input-charge-level">收費級別</label>
                                    <select id="input-charge-level" class="form-control">
                                        <option></option>
                                        @foreach(range(1, 3) as $v)
                                            <option value="{{ $v }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-auto pr-1">
                                    <label for="input-family-count">同住的家人或親戚的數目</label>
                                    <select id="input-family-count" class="form-control">
                                        <option></option>
                                        @foreach(range(0, 20) as $v)
                                            <option value="{{ $v }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($cases) }}筆記錄</span>
                        <div>
                            <a href="/hss/case/create" class="btn btn-secondary">申請及轉介</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:10%;">個案編號</th>
                                <th scope="col">申請人姓名</th>
                                <th scope="col">性別</th>
                                <th scope="col">申請日期</th>
                                <th scope="col">上次檢討日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col">跟進社工</th>
                                <th scope="col" style="width:12%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cases as $k => $v)
                                <tr>
                                    <td>{{ $v['case_number'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['gender'] }}</td>
                                    <td>{{ $v['create_date'] }}</td>
                                    <td>{{ $v['last_review_date'] }}</td>
                                    <td>{{ $statuses[$v['status']] }}</td>
                                    <td>{{ $v['sw'] }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm my-1" href="/hss/case/{{ $k }}/edit">編輯</a>
                                        <a class="btn btn-primary btn-sm my-1" href="/hss/case_assessment/{{ $k }}/edit">評估</a>
                                        <a class="btn btn-primary btn-sm my-1" href="/hss/case/{{ $k }}/reassessment">重估</a>
                                        <a class="btn btn-primary btn-sm my-1" href="/hss/case/{{ $k }}/recording">紀錄</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("bottom_script")
    <script>
        $(function() {
            $("#field-need-review").change(function() {
                if ($(this).val() === "1") {
                    alert("To HKU提示︰個案須每半年檢討一次，當選擇了到期檢討，則須顯示已到期需要檢討的個案。");
                }
            })
        })
    </script>
@endsection
