@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
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
                <div class="col-12 mb-3">
                    <label for="input-center" class="form-label">中心</label>
                    <select id="field-center" class="form-control mr-2" disabled>
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>
                </div>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">新增報名資料</button>
                        </div>
                        <div class="p-3">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">會員編號</th>
                                    <th scope="col" style="width:120px;">姓名</th>
                                    <th scope="col">聯絡電話</th>
                                    <th scope="col">收費</th>
                                    <th scope="col" style="width:100px;">最終收費</th>
                                    <th scope="col">繳費方式</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" value="03EL301002"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="張三"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="9521xxxx"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1">$100.0 - 長者會員</option>
                                                <option value="2" SELECTED>$80.0 - 長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="80"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option selected>請選擇付款方式</option>
                                                <option value="cash" SELECTED>現金</option>
                                                <option value="cheque">支票</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="far fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" value="03ELS301003"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="張細妹"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="6812xxxx"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option value="1" SELECTED>$100.0 - 長者會員</option>
                                                <option value="2">$80.0 - 長者會員(綜援)</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control form-control-sm" value="100"></td>
                                        <td>
                                            <select class="custom-select custom-select-sm" aria-label="Default select example">
                                                <option selected>請選擇付款方式</option>
                                                <option value="cash" SELECTED>現金</option>
                                                <option value="cheque">支票</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="far fa-trash"></i>
                                            </a>
                                        </td>
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
                        <div class="alert alert-primary" role="alert">
                            提示︰按此button後會預覽報名資料，確認後再提交會列印報名收據
                            (若有10人報名，則會列印10張收據)
                        </div>
                        <button type="submit" class="btn btn-primary">預覽及提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">報名資料</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <label for="field-member-code" class="col-form-label">會員編號</label>
                                <input type="text" class="form-control" id="field-member-code">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="field-member-type" class="col-form-label">會員類別</label>
                                <select class="custom-select custom-select" aria-label="Default select example">
                                    <option value="1" SELECTED>長者會員</option>
                                    <option value="2">長者會員(綜援)</option>
                                    <option value="3">驕陽會員</option>
                                    <option value="4">護老者</option>
                                    <option value="5">義工</option>
                                    <option value="6">非會員</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="field-name" class="col-form-label">姓名</label>
                                <input type="text" class="form-control" id="field-name">
                            </div>
                            <div class="col-md-6">
                                <label for="field-contact-phone" class="col-form-label">聯絡電話</label>
                                <input type="text" class="form-control" id="field-contact-phone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="field-dob" class="col-form-label">出生日期</label>
                                <input type="text" class="form-control" id="field-dob">
                            </div>
                            <div class="col-md-6">
                                <label for="field-gender" class="col-form-label">姓別</label>
                                <select class="custom-select custom-select" aria-label="Default select example">
                                    <option value="1" SELECTED>男</option>
                                    <option value="2">女</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="field-fee" class="col-form-label">收費</label>
                                <select class="custom-select custom-select" aria-label="Default select example">
                                    <option value="1" SELECTED>$100.0 - 長者會員</option>
                                    <option value="2">$80.0 - 長者會員(綜援)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="field-discount" class="col-form-label">折扣</label>
                                <input type="text" class="form-control" id="field-discount">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="field-coupon" class="col-form-label">優惠劵名稱</label>
                                <input type="text" class="form-control" id="field-coupon">
                            </div>
                            <div class="col-md-6">
                                <label for="field-coupon-discount" class="col-form-label">優惠劵折扣</label>
                                <input type="text" class="form-control" id="field-coupon-discount">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="field-final-fee" class="col-form-label">最終收費</label>
                                <input type="text" class="form-control" id="field-final-fee">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="field-payment-type" class="col-form-label">繳費方式</label>
                                <select class="custom-select custom-select" aria-label="Default select example">
                                    <option selected>請選擇付款方式</option>
                                    <option value="cash" SELECTED>現金</option>
                                    <option value="cheque">支票</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="field-reference-number" class="col-form-label">支票號碼/其他參考編號</label>
                                <input type="text" class="form-control" id="field-reference-number">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-primary">新增報名資料</button>
                </div>
            </div>
        </div>
    </div>
@endsection
