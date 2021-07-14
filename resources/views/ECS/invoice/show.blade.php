@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/invoice/">收據</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $invoice['invoice'] }}</li>
                </ol>
            </nav>

            <div>
                <form>
                    <p class="border-bottom h5 pb-2 mb-4">個人資料</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="{{ $invoice['member_code'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-membership" class="form-label">會員類別</label>
                            <input type="text" class="form-control" id="input-membership" value="長者會員(綜援)" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="{{ $invoice['member_name'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="XXXX XXX XXX" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-gender" class="form-label">性別</label>
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
                            <label for="input-fee" class="form-label">收費金額</label>
                            <input type="text" class="form-control" id="input-fee" value="{{ $invoice['fee'] }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-payment-type" class="form-label">繳費方式</label>
                            <select class="custom-select" id="input-payment-type" disabled>
                                <option value="cash">現金</option>
                                <option value="cheque">支票</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-invoice-status" class="form-label">收據狀態</label>
                            <select class="custom-select" id="input-invoice-status" disabled>
                                <option value="A">有效</option>
                                <option value="I">作癈</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-create-date" class="form-label">繳費日期</label>
                            <input type="text" class="form-control" id="input-create-date" value="{{ $invoice['time'] }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-staff" class="form-label">經手人</label>
                            <input type="text" class="form-control" id="input-staff" value="職員A" readonly>
                        </div>
                    </div>



                    <p class="border-bottom h5 pb-2 my-4">收費類別</p>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-income-type" class="form-label">收費類別</label>
                            <select id="input-income-type" class="custom-select" disabled>
                                @foreach($income_types as $it)
                                    <option {{ $it == $invoice['income_type'] ? 'SELECTED' : '' }}>{{ $it }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <a href="{{ $invoice['url'] }}" target="_blank">詳細內容</a>
                        </div>
                    </div>

                    <p class="border-bottom h5 pb-2 my-4">退款</p>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="input-confirm-refund">
                                <label class="form-check-label" for="input-confirm-refund">
                                    處理退款
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-refund-reason">退款原因</label>
                            <textarea class="form-control" id="input-refund-reason" rows="3" disabled></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-refund-date">退款日期</label>
                            <input type="text" class="form-control" id="input-refund-date" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" id="btn-refund" disabled>退款及列印</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(function() {
            $("#input-confirm-refund").on('click', function() {
                if ($(this).is(":checked")) {
                    $("#input-refund-reason").attr('disabled', false);
                    let date = new Date().toISOString().split('T')[0];
                    let time = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric"});
                    $("#input-refund-date").attr('disabled', false).val(date + ' ' + time);
                    $("#btn-refund").attr('disabled', false);
                } else {
                    $("#input-refund-reason").attr('disabled', true);
                    $("#input-refund-date").attr('disabled', true).val('');
                    $("#btn-refund").attr('disabled', true);
                }
            })
        })
    </script>
@endsection
