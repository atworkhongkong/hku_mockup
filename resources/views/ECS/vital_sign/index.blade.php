@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">生命表徵</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/vital_sign" method="GET">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}" {{ $k == 1 ? 'SELECTED' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-type">類別</label>
                    <select id="field-type" class="form-control mr-2">
                        <option value="name">姓名</option>
                        <option value="phone">電話</option>
                        <option value="hkid">身份證號碼</option>
                        <option value="member_code">會員編號</option>
                    </select>

                    <label class="sr-only" for="field-key-word">關鍵字</label>
                    <input type="text" class="form-control mr-2" id="field-key-word" placeholder="關鍵字" value="張雷">

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                </form>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>基本資料</span>
                </div>
                <div class="p-3">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-name" value="張雷" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="03EL30012" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input-phone" class="form-label">電話</label>
                            <input type="text" class="form-control" id="input-chi-name" value="98989898" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="input-hkid" class="form-label">身份證號碼</label>
                            <input type="text" class="form-control" id="input-hkid" value="Axxxxxx(x)" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($vital_signs) }}筆記錄</span>
                        <div>
                            <a href="/ecs/vital_sign/create" class="btn btn-secondary">新增紀錄</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:15%;">日期</th>
                                <th scope="col">血壓(mm Hg)</th>
                                <th scope="col">心跳(bpm)</th>
                                <th scope="col">身高(cm)</th>
                                <th scope="col">體重(kg)</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vital_signs as $k => $v)
                                <tr>
                                    <td>{{ $v['date'] }}</td>
                                    <td>{{ $v['systolic'] }}/{{ $v['diastolic'] }}</td>
                                    <td>{{ $v['pulse'] }}</td>
                                    <td>{{ $v['height'] }}</td>
                                    <td>{{ $v['weight'] }}</td>
                                    <td><a class="btn btn-primary" href="/ecs/vital_sign/{{ $k }}/edit">查看</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
