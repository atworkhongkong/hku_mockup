@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/invoice/">收據</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $invoice_id }}</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/invoice" method="POST">
                    @csrf
                    <label class="sr-only" for="field-member-code">收據編號</label>
                    <input type="text" id="field-member-code" class="form-control mr-2" name="invoice_id" value="{{ $invoice_id }}"/>

                    <button type="submit" class="btn btn-primary">搜尋收據</button>
                </form>
            </div>

            <div>
                <form>
                    <p class="border-bottom h5 pb-2 mb-4">個人資料</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="03EL300102" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-membership" class="form-label">會員類別</label>
                            <input type="text" class="form-control" id="input-membership" value="長者會員(綜援)" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="陳永仁" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="Chan Wing Yan" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-gender" class="form-label">姓別</label>
                            <select class="custom-select" id="input-gender" disabled>
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-dob" class="form-label">出生日期</label>
                            <input type="text" class="form-control" id="input-dob" value="1945-07-01" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-address" class="form-label">地址</label>
                            <input type="text" class="form-control" id="input-address" value="香港仔中心x座x樓x室" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-hkid" class="form-label">身份證號碼</label>
                            <input type="text" class="form-control" id="input-hkid" value="Exxxxxx(x)" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">住宅電話</label>
                            <input type="text" class="form-control" id="input-phone" value="21122112" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-mobile" class="form-label">手提電話</label>
                            <input type="text" class="form-control" id="input-mobile" value="98989898" readonly>
                        </div>
                    </div>

                    <p class="border-bottom h5 pb-2 my-4">收據資料</p>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-bank-in-status" class="form-label">入數狀態</label>
                            <select class="custom-select" id="input-bank-in-status" disabled>
                                <option value="T">已銀行入數</option>
                                <option value="F">未入數</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-staff" class="form-label">職員</label>
                            <input type="text" class="form-control" id="input-staff" value="職員A" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-payment-type" class="form-label">繳費方式</label>
                            <select class="custom-select" id="input-payment-type" disabled>
                                <option value="cash">現金</option>
                                <option value="cheque">支票</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-fee" class="form-label">收費金額</label>
                            <input type="text" class="form-control" id="input-staff" value="職員A" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-invoice-status" class="form-label">收據狀態</label>
                            <select class="custom-select" id="input-invoice-status" disabled>
                                <option value="A">有效</option>
                                <option value="I">無效</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-create-date" class="form-label">發出日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="2021-01-05" readonly>
                        </div>
                    </div>



                    <p class="border-bottom h5 pb-2 my-4">報名資料</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-code" class="form-label">活動編號</label>
                            <input type="text" class="form-control" id="input-code" value="JM30130" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文名稱</label>
                            <input type="text" class="form-control" id="input-chi-name" value="親子天地" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-programme-detail" class="form-label">活動詳情</label>
                            <div>
                                <a href="/ecs/programme/edit/2" target="_blank">活動詳細內容</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
