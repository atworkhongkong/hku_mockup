<div class="form-container">
    <form>
        <p class="text-right"><button class="btn btn-secondary">新增被照顧者</button></p>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>資料一</span>
                <span><button class="btn btn-danger">刪除</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="input-chi-name" class="form-label">中文姓名</label>
                        <input type="text" class="form-control" id="input-chi-name">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-eng-name" class="form-label">英文姓名</label>
                        <input type="text" class="form-control" id="input-eng-name">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-gender" class="form-label">性別</label>
                        <select class="form-control" id="input-gender">
                            <option value="M">男</option>
                            <option value="F">女</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="input-hkid" class="form-label">身份證號碼</label>
                        <input type="text" class="form-control" id="input-hkid">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-dob-year" class="form-label">出生年份</label>
                        <input type="text" class="form-control" id="input-dob-year">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-phone" class="form-label">聯絡電話</label>
                        <input type="text" class="form-control" id="input-phone">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-address" class="form-label">住址</label>
                        <input type="text" class="form-control" id="input-address">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-financial-status" class="form-label">經濟狀況</label>
                        <div>
                            @foreach($form5_cb_1 as $k => $f)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1_{{$k}}">
                                    <label class="form-check-label" for="defaultCheck1_{{$k}}">
                                        {{$f}}
                                    </label>
                                    @if ($k == count($form5_cb_1) - 1)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="請填寫">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-service" class="form-label">使用服務</label>
                        <div>
                            @foreach($form5_cb_2 as $k => $f)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2_{{$k}}">
                                    <label class="form-check-label" for="defaultCheck2_{{$k}}">
                                        {{$f}}
                                    </label>
                                    @if ($k == count($form5_cb_2) - 1)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="請填寫">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto mb-3">
                        <label for="input-long-service" class="form-label">長者長期服務</label>
                        <select class="form-control" id="input-long-service">
                            <option value="">沒有</option>
                            <option value="y">有</option>
                        </select>
                    </div>
                    <div class="col mb-3">
                        <label for="exampleFormControlFile1">&nbsp;</label>
                        <div>
                            @foreach($form5_cb_3 as $k => $f)
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" id="long_service_{{$k}}" @if($k == 1)style="margin-top:8px;"@endif disabled>
                                    <label class="form-check-label" for="long_service_{{$k}}">
                                        {{$f}}
                                    </label>
                                    @if ($k == count($form5_cb_3) - 1)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="long_service_1_other" disabled placeholder="請填寫">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-service" class="form-label">患有疾病</label>
                        <div>
                            @foreach($form5_cb_4 as $k => $f)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2_{{$k}}">
                                    <label class="form-check-label" for="defaultCheck2_{{$k}}">
                                        {{$f}}
                                    </label>
                                    @if ($k == count($form5_cb_4) - 1)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="請填寫">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-service" class="form-label">活動能力</label>
                        <div>
                            @foreach($form5_cb_5 as $k => $f)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2_{{$k}}">
                                    <label class="form-check-label" for="defaultCheck2_{{$k}}">
                                        {{$f}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>資料二</span>
                <span><button class="btn btn-danger">刪除</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>

    </form>
</div>


<script>
    $("#input-long-service").change(function() {
        if ($(this).val() === "y") {
            $("#long_service_0").prop('disabled', false);
            $("#long_service_1").prop('disabled', false);
        } else {
            $("#long_service_0").prop('disabled', true);
            $("#long_service_1").prop('disabled', true);
        }
    })
    $("#long_service_1").on('click', function() {
        if ($(this).is(':checked')) {
            $("#long_service_1_other").prop("disabled", false);
        } else {
            $("#long_service_1_other").prop("disabled", true);
        }
    })
</script>
