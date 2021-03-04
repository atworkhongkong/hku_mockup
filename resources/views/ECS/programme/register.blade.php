@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">{{ $programmes[$programme_id]['code'] }} - {{ $programmes[$programme_id]['name'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">報名人數</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/{{ $programme_id }}/register" class="btn btn-primary">報名人數</a>
                <a href="/ecs/programme/{{ $programme_id }}/attendance/" class="btn btn-outline-primary">出席記錄</a>
                <a href="/ecs/programme/{{ $programme_id }}/waiting_list" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme/{{ $programme_id }}/tutor_salary" class="btn btn-outline-primary">導師費用</a>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>活動名額︰20, 有效報名人數︰2, 取消人數︰1</span>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-secondary">匯出紀錄</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">收據編號</th>
                                <th scope="col" style="width:15%;">會員編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">手提電話</th>
                                <th scope="col">報名日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col">付款方法</th>
                                <th scope="col">優惠</th>
                                <th scope="col">金額</th>
                                <th scope="col" style="width:16%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/ecs/invoice/A0000012" target="_blank">A0000012</a></td>
                                <td>03EL300102</td>
                                <td>陳永仁</td>
                                <td>98989898</td>
                                <td>2021-01-05</td>
                                <td>有效</td>
                                <td>現金</td>
                                <td></td>
                                <td>$100.0</td>
                                <td>
                                    <a href="/ecs/programme_register/10" class="btn btn-primary mb-1">詳情</a>
                                    <a href="javascript:void(0);" class="btn btn-primary mb-1">列印收據</a>
                                    <a href="javascript:void(0);" class="btn btn-danger mb-1" data-toggle="modal" data-target="#cancel-modal">取消</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/ecs/invoice/A0000011" target="_blank">A0000011</a></td>
                                <td>03ELS300805</td>
                                <td>劉健明</td>
                                <td>96969696</td>
                                <td>2021-01-04</td>
                                <td>有效</td>
                                <td>現金</td>
                                <td>$20<br>(優惠劵)</td>
                                <td>$80.0</td>
                                <td>
                                    <a href="/ecs/programme_register/9" class="btn btn-primary mb-1">詳情</a>
                                    <a href="javascript:void(0);" class="btn btn-primary mb-1">列印收據</a>
                                    <a href="javascript:void(0);" class="btn btn-danger mb-1" data-toggle="modal" data-target="#cancel-modal">取消</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/ecs/invoice/A0000010" target="_blank">A0000010</a></td>
                                <td>03ELS300805</td>
                                <td>葉問</td>
                                <td>95959595</td>
                                <td>2021-01-04</td>
                                <td>已取消</td>
                                <td>現金</td>
                                <td></td>
                                <td>($100.0)</td>
                                <td>
                                    <a href="/ecs/programme_register/8" target="_blank" class="btn btn-primary mb-1">詳情</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" class="text-right">總收入︰</td>
                                <td>$180.0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">取消報名</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form target="_blank" action="/ecs/programme_register/cancel" method="GET" id="submit-form">
                                <input type="hidden" name="code" value="sae235S32vde23">
                                <div class="form-group">
                                    <label for="field-member-code" class="col-form-label">會員編號</label>
                                    <input type="text" class="form-control" id="field-member-code" value="03EL300102" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="field-name" class="col-form-label">會員姓名</label>
                                    <input type="text" class="form-control" id="field-name" value="陳永仁" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">取消原因</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="refund-part">退款</label>
                                        <select class="form-control" id="refund-part">
                                            <option>全數退款</option>
                                            <option SELECTED>部份退款</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="refund-day">退款日數</label>
                                        <input type="text" class="form-control" id="refund-day">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="field-confirm" class="col-form-label">輸入03EL300102以確認</label>
                                        <input type="text" class="form-control" id="field-confirm">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取 消</button>
                            <button type="button" class="btn btn-primary" onclick="document.getElementById('submit-form').submit();">退 款</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
