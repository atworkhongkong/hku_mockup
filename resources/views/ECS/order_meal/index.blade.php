@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">膳食預訂</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/order_meal" method="GET" onsubmit="return false;">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-member-code" >會員編號</label>
                            <input type="text" id="field-member-code" class="form-control mr-2" placeholder="會員編號" value="03EL30012" style="width:140px;"/>
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-key-word" >關錄字</label>
                            <input type="week" class="form-control mr-2" id="field-key-word">
                        </div>
                        <div class="col-auto pr-0">
                            <label class="sr-only" for="field-invoice" >收據編號</label>
                            <input type="text" class="form-control mr-2" id="field-invoice" placeholder="收據編號">
                        </div>
                        <div class="col-auto pr-0">
                            <button type="submit" class="btn btn-primary mr-2">搜尋</button>
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#more-search" aria-expanded="false" aria-controls="more-search">進階搜尋</button>
                        </div>
                    </div>

                    <div class="collapse mt-2" id="more-search" style="width:100%;">
                        <div class="card card-body">
                            <div class="row mb-2">
                                <div class="col-auto">
                                    <label class="" for="field-name">姓名</label>
                                    <input type="text" id="field-name" class="form-control" />
                                </div>
                                <div class="col-auto">
                                    <label class="" for="field-food-name">膳食名稱</label>
                                    <input type="text" id="field-food-name" class="form-control" />
                                </div>
                                <div class="col-auto">
                                    <label class="" for="field-order-count">餐數</label>
                                    <input type="text" id="field-order-count" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    @if (false)
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span>找到1筆記錄</span>
                            <div>
                                <a href="/ecs/order_meal/create" class="btn btn-secondary">預訂膳食</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:10%;">會員編號</th>
                                    <th scope="col">姓名</th>
                                    <th scope="col" style="width:12%;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>03EL30012</td>
                                    <td>王妹</td>
                                    <td><a class="btn btn-primary" href="/ecs/order_meal?member_code=03EL30012">訂飯紀錄</a></td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span>找到2筆記錄</span>
                            <div>
                                <a href="/ecs/order_meal/create?member_code=03EL30012" class="btn btn-secondary">預訂膳食</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">姓名</th>
                                    <th scope="col">訂飯編號</th>
                                    <th scope="col">日期</th>
                                    <th scope="col">餐數</th>
                                    <th scope="col">建立日期</th>
                                    <th scope="col" style="width:8%;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>王妹</td>
                                    <td>1082</td>
                                    <td>2021-02-08 至 2021-02-13</td>
                                    <td>3</td>
                                    <td>2020-02-02</td>
                                    <td>
                                        <a href="/ecs/order_meal/1082/edit" class="btn btn-primary">編輯</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>王妹</td>
                                    <td>1081</td>
                                    <td>2021-02-08 至 2021-02-13</td>
                                    <td>9</td>
                                    <td>2020-02-01</td>
                                    <td>
                                        <a href="/ecs/order_meal/1081/edit" class="btn btn-primary">編輯</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
