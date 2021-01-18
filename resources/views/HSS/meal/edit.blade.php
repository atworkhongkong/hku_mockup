@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="inputUserName" class="form-label">使用者姓名</label>
                        <input type="email" class="form-control" id="inputUserName"  value="陳娣">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputDistrict" class="form-label">分區</label>
                        <select class="custom-select" aria-label="select example">
                            <option selected></option>
                            @foreach($delivery_routes as $k => $dr)
                                <option value="{{ $dr }}" {{ $k == 2 ? "SELECTED" : "" }}>{{ $dr }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputAddress" class="form-label">地址</label>
                        <input type="text" class="form-control" id="inputAddress" value="石排灣村碧朗樓x樓x室">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputCaseNumber" class="form-label">檔案編號</label>
                        <input type="email" class="form-control" id="inputCaseNumber" value="104/301">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputServiceTeam" class="form-label">服務隊</label>
                        <select class="custom-select" aria-label="Default select example" id="inputServiceTeam">
                            <option selected>請選擇服務隊</option>
                            <option value="IH12" SELECTED>IH12</option>
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
                                    <td>2020-12-01</td>
                                    <td>2021-01-31</td>
                                    <td>
                                        <div class="my-1">
                                            <span>星期一</span>
                                            <span class="am">AM</span>
                                            <span class="pm">PM</span>
                                        </div>
                                        <div class="my-1">
                                            <span>星期三</span>
                                            <span class="am">AM</span>
                                            <span class="pm">PM</span>
                                        </div>
                                        <div class="my-1">
                                            <span>星期五</span>
                                            <span class="am">AM</span>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>停飯至另行通知</td>
                                    <td>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-meal-modal">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="text-muted" style="background-color:#EFEFEF;">
                                    <td>2020-10-01</td>
                                    <td>2020-10-31</td>
                                    <td>全日餐</td>
                                    <td>15/10早上停</td>
                                    <td>已完結</td>
                                    <td><i class="far fa-edit"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @include('HSS.meal.create_meal_modal')
                    @include('HSS.meal.edit_meal_modal')

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">新 增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .meal-time { width: auto; }
        .am { border: 1px solid black; background-color: black; color: white; padding: 2px; font-size: 10px; border-radius: 6px; }
        .pm { border: 2px solid black; color: black; padding: 2px; font-size: 10px; border-radius: 6px; }
    </style>

    <script>
        $("#select-all").click(function() {
            $(".delivery-time").prop( "checked", $(this).is( ":checked" ) );
        })
    </script>
@endsection
