@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme_register">活動報名</a></li>
                    <li class="breadcrumb-item active" aria-current="page">多人報名</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/programme" method="GET">
                    <label class="sr-only" for="field-code">活動編號</label>
                    <input type="text" id="field-code" class="form-control mr-2" placeholder="活動編號" value="JM32008"/>

                    <button type="submit" class="btn btn-primary">搜尋活動</button>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-chi-name" class="form-label">中文名稱</label>
                    <input type="text" class="form-control" id="input-chi-name" value="親子活動" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-eng-name" class="form-label">英文名稱</label>
                    <input type="text" class="form-control" id="input-eng-name" value="Family Activity" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-location" class="form-label">地點</label>
                    <input type="text" class="form-control" id="input-location" value="香港仔大道 180 號 B 204室" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-quota" class="form-label">報名名額</label>
                    <input type="text" class="form-control" id="input-quota" value="20" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-quota" class="form-label">剩餘名額</label>
                    <input type="text" class="form-control" id="input-quota" value="12" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-min-age" class="form-label">最低年齡</label>
                    <input type="text" class="form-control" id="input-min-age" value="60" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-eng-name" class="form-label">最高年齡</label>
                    <input type="text" class="form-control" id="input-eng-name" value="" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-content" class="form-label">內容</label>
                    <textarea class="form-control" id="input-content" rows="4" readonly></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-start-date" class="form-label">開始日期</label>
                    <input type="text" class="form-control" id="input-start-date" value="2021-03-01" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-end-date" class="form-label">結束日期</label>
                    <input type="text" class="form-control" id="input-end-date" value="2021-03-01" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-reg-start-date" class="form-label">接受報名日期</label>
                    <input type="text" class="form-control" id="input-start-date" value="2021-01-01" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-reg-end-date" class="form-label">截止報名日期</label>
                    <input type="text" class="form-control" id="input-end-date" value="2021-01-31" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-total-lesson" class="form-label">總活動堂數</label>
                    <input type="text" class="form-control" id="input-total-lesson" value="1" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-staff" class="form-label">負責同事</label>
                    <input type="text" class="form-control" id="input-staff" value="同事A" readonly>
                </div>
            </div>

            <hr class="my-5">

            <div class="form-container">
                <form>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>個人資料</span>
                            <span>
                                <input type="text" class="form-control" list="programme-list" placeholder="搜尋會員" style="display:inline-block; width:70%;"/>
                                <datalist id="programme-list">
                                      <option value="03EL301002 張三">
                                      <option value="03ELS301003 陳細妹">
                                </datalist>
                                或 <a class="btn btn-primary" href="javascript:void(0);">新增</a>
                            </span>
                        </div>
                        <div class="p-3">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">會員編號</th>
                                    <th scope="col">會員類別</th>
                                    <th scope="col">姓名</th>
                                    <th scope="col">身份證號碼</th>
                                    <th scope="col" style="width:60px;">年齡</th>
                                    <th scope="col" style="width:60px;">姓別</th>
                                    <th scope="col">收費</th>
                                    <th scope="col" style="width:60px;">折扣</th>
                                    <th scope="col" style="width:60px;">最終收費</th>
                                    <th scope="col">繳費方式</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" value="03EL301002"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1">長者會員</option>
                                                <option value="2" SELECTED>長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="張三"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="Axxxxxx(x)"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="65"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1" SELECTED>男</option>
                                                <option value="2">女</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1">$100.0 - 長者會員</option>
                                                <option value="2" SELECTED>$80.0 - 長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control form-control-sm" type="text" value="" placeholder="0">
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="80"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option selected>請選擇付款方式</option>
                                                <option value="cash" SELECTED>現金</option>
                                                <option value="cheque">支票</option>
                                            </select>
                                        </td>
                                        <td><i class="far fa-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" value="03ELS301003"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1" SELECTED>長者會員</option>
                                                <option value="2">長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="張細妹"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="Bxxxxxx(x)"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="61"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1">男</option>
                                                <option value="2" SELECTED>女</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1" SELECTED>$100.0 - 長者會員</option>
                                                <option value="2">$80.0 - 長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control form-control-sm" type="text" value="" placeholder="0">
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="100"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option selected>請選擇付款方式</option>
                                                <option value="cash" SELECTED>現金</option>
                                                <option value="cheque">支票</option>
                                            </select>
                                        </td>
                                        <td><i class="far fa-trash"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>總金額</span>
                        </div>
                        <div class="p-3">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <label class="sr-only" for="field-total-price">總金額</label>
                                    <input type="text" id="field-total-price" class="form-control mr-2" value="180" readonly />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
