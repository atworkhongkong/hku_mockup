<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-code" class="form-label">護老者編號</label>
                <input type="text" class="form-control" id="input-code" @isset($carer_id) value="{{ $carer['code'] }}" @endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-chi-name" class="form-label">中文姓名</label>
                <input type="text" class="form-control" id="input-chi-name" @isset($carer_id) value="{{ $carer['name'] }}" @endisset>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-eng-name" class="form-label">英文姓名</label>
                <input type="text" class="form-control" id="input-eng-name">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-gender">性別</label>
                <select class="form-control" id="input-gender">
                    <option value="M">男</option>
                    <option value="F">女</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-hkid" class="form-label">身份證號碼</label>
                <input type="text" class="form-control" id="input-hkid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-dob" class="form-label">出生日期</label>
                <input type="date" class="form-control" id="input-dob">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-age" class="form-label">年齡</label>
                <input type="text" class="form-control" id="input-age">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-mother-language" class="form-label">所操方言</label>
                <input type="text" class="form-control" id="input-mother-language">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="input-address-1" class="form-label">單位</label>
                <input type="text" class="form-control" id="input-address-1">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-address-2" class="form-label">樓層</label>
                <input type="text" class="form-control" id="input-address-2">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-address-3" class="form-label">大廈</label>
                <input type="text" class="form-control" id="input-address-3">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-address-4" class="form-label">屋邨</label>
                <input type="text" class="form-control" id="input-address-4">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="input-address-5" class="form-label">街道</label>
                <input type="text" class="form-control" id="input-address-5">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-address-6" class="form-label">地區</label>
                <input type="text" class="form-control" id="input-address-6">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-address-7" class="form-label">區域</label>
                <select id="input-address-7" class="custom-select">
                    <option>香港</option>
                    <option>九龍</option>
                    <option>新界</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-phone" class="form-label">聯絡電話</label>
                <input type="text" class="form-control" id="input-phone">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-email" class="form-label">電郵地址</label>
                <input type="text" class="form-control" id="input-email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-relationship" class="form-label">與被照顧者關係</label>
                <select class="form-control" id="input-relationship">
                    <option></option>
                    <option value="">夫婦</option>
                    <option value="">子女</option>
                    <option value="">孫</option>
                    <option value="">媳/婿</option>
                    <option value="">兄弟姊妹</option>
                    <option value="">義工/鄰居/朋友</option>
                    <option value="">傭人</option>
                    <option value="other">其他</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-relationship-other" class="form-label">關係 - 其他</label>
                <input type="text" class="form-control" id="input-relationship-other" disabled placeholder="請填寫">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-living-status" class="form-label">居住狀況</label>
                <select class="form-control" id="input-living-status">
                    <option></option>
                    <option value="">與被照顧者同住</option>
                    <option value="">與被照顧者及其他人同住</option>
                    <option value="">與被照顧者不同住</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-marriage-status" class="form-label">婚姻狀況</label>
                <select class="form-control" id="input-marriage-status">
                    <option></option>
                    <option value="">未婚</option>
                    <option value="">已婚</option>
                    <option value="">離婚/分居</option>
                    <option value="">鰥寡</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-career" class="form-label">職業</label>
                <select class="form-control" id="input-career">
                    <option></option>
                    <option value="">全職</option>
                    <option value="">兼職</option>
                    <option value="">退休</option>
                    <option value="">家庭照顧者</option>
                    <option value="other">其他</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-career-other" class="form-label">職業 - 其他</label>
                <input type="text" class="form-control" id="input-career-other" disabled placeholder="請填寫">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-financial-status" class="form-label">經濟狀況</label>
                <select class="form-control" id="input-financial-status">
                    <option></option>
                    <option value="">工作收入</option>
                    <option value="">高齡津貼</option>
                    <option value="">長者生活津貼/高額長者生活津貼</option>
                    <option value="">退休金/長俸</option>
                    <option value="">儲蓄</option>
                    <option value="">傷殘/高額傷殘津貼</option>
                    <option value="">子女/親屬供養</option>
                    <option value="">綜援</option>
                    <option value="other">其他</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-financial-other" class="form-label">經濟 - 其他</label>
                <input type="text" class="form-control" id="input-financial-other" disabled placeholder="請填寫">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-service" class="form-label">患有疾病</label>
                <div style="width:100%;">
                    @foreach($form5_cb_4 as $k => $f)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2_{{$k}}">
                            <label class="form-check-label" for="defaultCheck2_{{$k}}">
                                {{$f}}
                            </label>
                            @if ($k == 11)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:70%;" id="field-other" placeholder="請填寫">
                            @elseif ($k == count($form5_cb_4) - 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:70%;" id="field-other" placeholder="請填寫">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="remark" class="col-form-label">備註:</label>
                <textarea class="form-control" id="remark" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-create-date" class="form-label">登記日期</label>
                <input type="date" class="form-control" id="input-create-date" @isset($carer_id) value="{{ $carer['create_date'] }}" @else value="{{ date("Y-m-d") }}" @endisset>
            </div>
        </div>

        <div class="alert alert-primary" role="alert">
            提示︰<br>
            (1) 姓名、身份證、電話必填<br>
            (2) 輪入出生日期後，自動計算年齡<br>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>

<script>
    $("#input-relationship").change(function() {
        if ($(this).val() === "other") {
            $("#input-relationship-other").prop('disabled', false);
        } else {
            $("#input-relationship-other").prop('disabled', true);
        }
    })
    $("#input-career").change(function() {
        if ($(this).val() === "other") {
            $("#input-career-other").prop('disabled', false);
        } else {
            $("#input-career-other").prop('disabled', true);
        }
    })
    $("#input-financial-status").change(function() {
        if ($(this).val() === "other") {
            $("#input-financial-other").prop('disabled', false);
        } else {
            $("#input-financial-other").prop('disabled', true);
        }
    })
</script>

