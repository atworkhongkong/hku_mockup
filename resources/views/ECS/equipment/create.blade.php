@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/equipment">儀器</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增儀器</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-name" class="form-label">儀器</label>
                            <input type="text" class="form-control" id="input-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-amount" class="form-label">數量</label>
                            <input type="text" class="form-control" id="input-amount">
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
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
