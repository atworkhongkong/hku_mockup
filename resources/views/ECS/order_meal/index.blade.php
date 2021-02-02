@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @if ($member_code)
                        <li class="breadcrumb-item active"><a href="/ecs/order_meal">膳食預訂</a></li>
                        <li class="breadcrumb-item active">王妹</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">膳食預訂</li>
                    @endif
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/order_meal" method="GET">
                    <label class="sr-only" for="field-chi-name" >會員編號</label>
                    <input type="text" id="field-chi-name" class="form-control mr-2" placeholder="會員姓名" value="王妹"/>

                    @if ($member_code)
                        <label class="sr-only" for="field-key-word" >關錄字</label>
                        <input type="week" class="form-control mr-2" id="input-week">
                    @endif

                    <button type="submit" class="btn btn-primary">搜尋</button>

                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    @if (!$member_code)
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
                            <span>找到1筆記錄</span>
                            <div>
                                <a href="/ecs/order_meal/create?member_code=03EL30012" class="btn btn-secondary">預訂膳食</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="width:10%;">訂飯編號</th>
                                <th scope="col">日期</th>
                                <th scope="col">餐數</th>
                                <th scope="col" style="width:5%;">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1082</td>
                                    <td>2021-02-08 至 2021-02-13</td>
                                    <td>3</td>
                                    <td><a href="/ecs/order_meal/1082/edit"><i class="far fa-edit"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1081</td>
                                    <td>2021-02-08 至 2021-02-13</td>
                                    <td>9</td>
                                    <td><a href="/ecs/order_meal/1081/edit"><i class="far fa-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
