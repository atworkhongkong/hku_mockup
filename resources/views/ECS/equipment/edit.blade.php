@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/equipment">儀器</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $equipment['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">中心</label>
                            <select id="input-center" class="form-control mr-2">
                                <option value=""></option>
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-name" class="form-label">儀器名稱</label>
                            <input type="text" class="form-control" id="input-name" value="{{ $equipment['name'] }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-name" class="form-label">數量</label>
                            <input type="text" class="form-control" id="input-name" value="{{ $equipment['count'] }}">
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>庫存</span>
                            <button type="button" class="btn btn-primary">新增庫存</button>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">編號</th>
                                    <th scope="col">建立日期</th>
                                    <th scope="col">狀況</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($equipment['items'] as $i)
                                        <tr>
                                            <td><input class="form-control" type="text" value="{{ $i['label'] }}"></td>
                                            <td><input class="form-control" type="text" value="{{ $i['create_date'] }}"></td>
                                            <td>
                                                <label class="sr-only" for="field-status">狀況</label>
                                                <select class="form-control" id="field-status">
                                                    @foreach($statuses as $k => $s)
                                                        <option {{ $i['status'] == $k ? 'SELECTED' : '' }}>{{ $s }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><i class="far fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">單位</th>
                                <th scope="col">借用期限</th>
                                <th scope="col">收費</th>
                                <th scope="col">逾期罰款</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>月</td>
                                <td><input type="text" class="form-control" id="input-month-number" placeholder="借用月份期限"></td>
                                <td><input type="text" class="form-control" id="input-month-fee" placeholder="每x月價錢"></td>
                                <td><input type="text" class="form-control" id="input-month-penalty" placeholder="逾期每日罰款"></td>
                            </tr>
                            <tr>
                                <td>日</td>
                                <td><input type="text" class="form-control" id="input-day-number" placeholder="借用日數期限"></td>
                                <td><input type="text" class="form-control" id="input-day-fee" placeholder="每x日價錢"></td>
                                <td><input type="text" class="form-control" id="input-day-penalty" placeholder="逾期每日罰款"></td>
                            </tr>
                            <tr>
                                <td>星期</td>
                                <td><input type="text" class="form-control" id="input-week-number" placeholder="借用星期期限"></td>
                                <td><input type="text" class="form-control" id="input-week-fee" placeholder="每x星期價錢"></td>
                                <td><input type="text" class="form-control" id="input-week-penalty" placeholder="逾期每日罰款"></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">更 新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
