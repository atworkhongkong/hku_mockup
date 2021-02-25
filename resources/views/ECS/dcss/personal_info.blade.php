<div class="form-container">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-chi-name" class="form-label">中文姓名</label>
                <input type="text" class="form-control" id="input-chi-name" @isset($case_id) value="{{ $case['name'] }}" @endisset>
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
                <input type="text" class="form-control" id="input-dob">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-age" class="form-label">年齡</label>
                <input type="text" class="form-control" id="input-age">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-phone" class="form-label">住宅電話</label>
                <input type="text" class="form-control" id="input-phone">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-mobile" class="form-label">手提電話</label>
                <input type="text" class="form-control" id="input-mobile">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-address" class="form-label">通訊地址</label>
                <input type="text" class="form-control" id="input-address">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-languages" class="form-label">語言</label>
                <div>
                    @foreach($languages as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="languages-{{$k}}">
                            <label class="form-check-label" for="languages-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 3)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:40%;" id="field-language-other">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-educational-levels" class="form-label">教育程度</label>
                <div>
                    @foreach($educational_levels as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="educational-level-{{$k}}">
                            <label class="form-check-label" for="educational-level-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-marriage-statuses" class="form-label">婚姻狀況</label>
                <div>
                    @foreach($marriage_statuses as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="marriage-statuses-{{$k}}">
                            <label class="form-check-label" for="marriage-statuses-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-homes" class="form-label">住所</label>
                <div>
                    @foreach($home_types as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="home-types-{{$k}}">
                            <label class="form-check-label" for="home-types-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 4)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:40%;" id="field-home-types">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-economic-statuses" class="form-label">經濟狀況</label>
                <div>
                    @foreach($economic_statuses as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="economic-statuses-{{$k}}">
                            <label class="form-check-label" for="economic-statuses-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 0 || $k == 6 || $k == 8)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-economic-statuses-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-religions" class="form-label">宗教信仰</label>
                <div>
                    @foreach($marriage_statuses as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="religions-{{$k}}">
                            <label class="form-check-label" for="religions-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-environmental-obstacles" class="form-label">環境障礙</label>
                <div>
                    @foreach($environmental_obstacles as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="environmental-obstacles-{{$k}}">
                            <label class="form-check-label" for="environmental-obstacles-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 4)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-environmental-obstacles-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-family-members" class="form-label">同住家庭成員</label>
                <div>
                    @foreach($family_members as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="family-members-{{$k}}">
                            <label class="form-check-label" for="family-members-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 4)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="family-members-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-living-arrangements" class="form-label">日常生活安排</label>
                <div>
                    @foreach($living_arrangements as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="living-arrangements-{{$k}}">
                            <label class="form-check-label" for="living-arrangements-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-service-accepted" class="form-label">接受正規服務</label>
                <div>
                    @foreach($service_accepted as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="service-accepted-{{$k}}">
                            <label class="form-check-label" for="service-accepted-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="service-accepted-{{$k}}" placeholder="請註明服務及申請年份">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
