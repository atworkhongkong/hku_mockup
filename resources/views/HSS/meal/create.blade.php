@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/meal">膳食</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增膳食會員</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="inputUserName" class="form-label">使用者姓名</label>
                        <input type="email" class="form-control" id="inputUserName">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputDistrict" class="form-label">分區</label>
                        <select class="custom-select" aria-label="select example">
                            <option selected></option>
                            @foreach($delivery_routes as $k => $dr)
                                <option value="{{ $dr }}">{{ $dr }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputAddress" class="form-label">地址</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputCaseNumber" class="form-label">檔案編號</label>
                        <input type="email" class="form-control" id="inputCaseNumber">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputServiceTeam" class="form-label">服務隊</label>
                        <select class="custom-select" aria-label="Default select example" id="inputServiceTeam">
                            <option selected>請選擇服務隊</option>
                            <option value="IH12">IH12</option>
                            <option value="IH3">IH3</option>
                            <option value="TD">TD</option>
                            <option value="ES">ES</option>
                            <option value="HSMI">HSMI</option>
                            <option value="CCSV">CCSV</option>
                            <option value="IDSP">IDSP</option>
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <hr class="my-4">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span>膳食安排</span>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#create-meal-modal">
                                新增膳食安排
                            </button>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:15%;">開始日期</th>
                                    <th scope="col" style="width:15%;">結束日期</th>
                                    <th scope="col">時段</th>
                                    <th scope="col">備註</th>
                                    <th scope="col">狀態</th>
                                    <th scope="col" style="width:8%;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center">未有膳食記錄</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @include('HSS.meal.create_meal_modal')

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
