<div class="form-container">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-son" class="form-label">兒子數目</label>
                <input type="text" class="form-control" id="input-son">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-daughter" class="form-label">女兒數目</label>
                <input type="text" class="form-control" id="input-daughter">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                照顧者 （按123排名）
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer1" class="form-label">配偶</label>
                <input type="text" class="form-control" id="input-carer1">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer2" class="form-label">外傭</label>
                <input type="text" class="form-control" id="input-carer2">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer3" class="form-label">子</label>
                <input type="text" class="form-control" id="input-carer3">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer4" class="form-label">女</label>
                <input type="text" class="form-control" id="input-carer4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="input-carer5" class="form-label">媳婦</label>
                <input type="text" class="form-control" id="input-carer5">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer6" class="form-label">女婿</label>
                <input type="text" class="form-control" id="input-carer6">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer7" class="form-label">孫</label>
                <input type="text" class="form-control" id="input-carer7">
            </div>
            <div class="col-md-3 mb-3">
                <label for="input-carer8" class="form-label">其他</label>
                <input type="text" class="form-control" id="input-carer8">
            </div>
        </div>

        <table class="table my-4">
            <thead>
                <tr>
                    <th scope="col">照顧者名字</th>
                    <th scope="col">長者稱呼</th>
                    <th scope="col">聯絡電話</th>
                    <th scope="col">關係及照顧性質</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                </tr>
            </tbody>
        </table>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>主要照顧者資料</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-carer-live-with" class="form-label">居住情況</label>
                        <div>
                            @foreach($carer_live_with as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="carer-live-with-{{$k}}">
                                    <label class="form-check-label" for="carer-live-with-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 1)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-carer-live-with-{{$k}}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-carer-marriage-status" class="form-label">婚姻狀況</label>
                        <div>
                            @foreach($carer_marriage_status as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="carer-marriage-status-{{$k}}">
                                    <label class="form-check-label" for="carer-marriage-status-{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-carer-education-level" class="form-label">教育程度</label>
                        <div>
                            @foreach($carer_educational_level as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="carer-education-level-{{$k}}">
                                    <label class="form-check-label" for="carer-education-level-{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-carer-economic-status" class="form-label">經濟狀況</label>
                        <div>
                            @foreach($carer_economic_status as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="carer-economic-status-{{$k}}">
                                    <label class="form-check-label" for="carer-economic-status-{{$k}}">
                                        {{$v}}
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
                <span>照顧狀況</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-care_length" class="form-label">需要提供照顧時間</label>
                        <div>
                            @foreach($carer_live_with as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="care_length-{{$k}}">
                                    <label class="form-check-label" for="care_length-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k ==4)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-care-length-{{$k}}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-sleep-enough" class="form-label">睡眠情況</label>
                        <div>
                            @foreach($sleep_enough as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="sleep-enough-{{$k}}">
                                    <label class="form-check-label" for="sleep-enough-{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-need-carer" class="form-label">是否需要照顧其他人</label>
                        <div>
                            @foreach($need_carer as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="need-carer-{{$k}}">
                                    <label class="form-check-label" for="need-carer-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k ==4)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-need-care-{{$k}}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-ask-who" class="form-label">遇上困難時，會找誰人協助</label>
                        <div>
                            @foreach($ask_who as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ask-who-{{$k}}">
                                    <label class="form-check-label" for="ask-who-{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-difficulty" class="form-label">照顧困難 (可多於一項) </label>
                        <div>
                            @foreach($difficulty as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="difficulty-{{$k}}">
                                    <label class="form-check-label" for="difficulty-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 9)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-difficulty-{{$k}}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-need_escort" class="form-label">需要接送服務</label>
                        <div>
                            @foreach($need_escort as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="need_escort-{{$k}}">
                                    <label class="form-check-label" for="need_escort-{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-family-draw">家庭圖</label>
                        <input type="file" class="form-control-file" id="input-family-draw">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-habit" class="form-label">其他補充資料</label>
                        <textarea class="form-control" id="input-habit" rows="8"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-assess-method" class="form-label">評估形式</label>
                        <div>
                            @foreach($assess_method as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="assess-method-{{$k}}">
                                    <label class="form-check-label" for="assess-method-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 2)
                                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-assess-method-{{$k}}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
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
