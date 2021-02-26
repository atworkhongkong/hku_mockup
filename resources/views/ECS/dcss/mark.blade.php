<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>CDAD</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="input-mark1" class="form-label">副題總分/＃適用項目 一</label>
                        <input type="text" class="form-control" id="input-mark1">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-mark2" class="form-label">副題總分/＃適用項目 二</label>
                        <input type="text" class="form-control" id="input-mark2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-mark3" class="form-label">副題總分/＃適用項目 三</label>
                        <input type="text" class="form-control" id="input-mark3">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="input-mark4" class="form-label">副題百分比 一</label>
                        <input type="text" class="form-control" id="input-mark4">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-mark5" class="form-label">副題百分比 二</label>
                        <input type="text" class="form-control" id="input-mark5">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-mark6" class="form-label">副題百分比 三</label>
                        <input type="text" class="form-control" id="input-mark6">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-mark7" class="form-label">失智功能障礙評估總分/＃適用項目</label>
                        <input type="text" class="form-control" id="input-mark7">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-mark8" class="form-label">失智功能障礙評估百分比</label>
                        <input type="text" class="form-control" id="input-mark8">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>MOCA</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-moca1" class="form-label">總分</label>
                        <input type="text" class="form-control" id="input-moca1">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>NPI-Q</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-npiq1" class="form-label">嚴重程度</label>
                        <input type="text" class="form-control" id="input-npiq1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-npiq2" class="form-label">困援程度</label>
                        <input type="text" class="form-control" id="input-npiq2">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Occupational Therapy Assessment</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-ota1" class="form-label">總分</label>
                        <input type="text" class="form-control" id="input-ota1">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Physiotherapy Assessment</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-pa1" class="form-label">總分</label>
                        <input type="text" class="form-control" id="input-pa1">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>ZBI</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-zbi1" class="form-label">總分</label>
                        <input type="text" class="form-control" id="input-zbi1">
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
                        <label for="input-zbi" class="form-label">ZBI</label>
                        <input type="text" class="form-control" id="input-zbi">
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
