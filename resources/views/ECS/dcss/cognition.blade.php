<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-languages" class="form-label">活動能力</label>
                <div>
                    @foreach($mobility as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="mobility-{{$k}}">
                            <label class="form-check-label" for="mobility-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-educational-levels" class="form-label">轉移</label>
                <div>
                    @foreach($transfer as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="transfer-{{$k}}">
                            <label class="form-check-label" for="transfer-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-transfer-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-physique" class="form-label">疼痛程度</label>
                <div>
                    @foreach($pain_level as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="pain-level-{{$k}}">
                            <label class="form-check-label" for="pain-level-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">疼痛頻律</label>
                <div>
                    @foreach($pain_frequency as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="pain-frequency-{{$k}}">
                            <label class="form-check-label" for="pain-frequency-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 3 || $k == 4)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-pain-frequency-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-pain-location" class="form-label">疼痛位置</label>
                <input type="text" class="form-control" id="input-pain-location">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">跌倒</label>
                <div>
                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="drop-1">
                        <label class="form-check-label" for="drop-1">沒有</label>

                        <input class="form-check-input ml-3" type="checkbox" value="" id="drop-2">
                        <label class="form-check-label" for="drop-2">有， 最近一次：</label>
                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-drop-2">
                        <label class="form-check-label ml-3" for="drop-2">過去半年跌倒次數：</label>
                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-drop-3">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-drop-location" class="form-label">跌倒位置</label>
                <input type="text" class="form-control" id="input-drop-location">
            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-mfac" class="form-label">MFAC</label>
                <input type="text" class="form-control" id="input-mfac" value=" /7">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-ems" class="form-label">EMS</label>
                <input type="text" class="form-control" id="input-ems" value=" /20">
            </div>
        </div>
        -->
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">四肢</label>
                <div>
                    @foreach($hand_foot as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="hand-foot-{{$k}}">
                            <label class="form-check-label" for="hand-foot-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k > 0)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-hand-foot-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">認知障礙症</label>
                <div>
                    @foreach($dementia as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="dementia-{{$k}}">
                            <label class="form-check-label" for="dementia-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k > 0)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-dementia-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-dementia-condition" class="form-label">認知障礙情況 HK-MoCA</label>
                <input type="text" class="form-control" id="input-dementia-condition" value=" /30">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-test-date" class="form-label">最近測試日期</label>
                <input type="text" class="form-control" id="input-test-date">
            </div>
        </div>
-->
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">睡眠狀況</label>
                <div>
                    @foreach($sleep_condition as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="sleep-condition-{{$k}}">
                            <label class="form-check-label" for="sleep-condition-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 6)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-sleep-condition-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">失方向</label>
                <div>
                    @foreach($lose_direction as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="lose-direction-{{$k}}">
                            <label class="form-check-label" for="lose-direction-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">受壓行為（BPSD)</label>
                <div>
                    @foreach($bpsd as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="bpsd-{{$k}}">
                            <label class="form-check-label" for="bpsd-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 12)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-bpsd-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>CDAD 分數</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-cdad-1" class="form-label">起動力 (%)</label>
                        <input type="text" class="form-control" id="input-cdad-1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-cdad-2" class="form-label">計劃及組織力 (%)</label>
                        <input type="text" class="form-control" id="input-cdad-2">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-cdad-3" class="form-label">有效執行力 (%)</label>
                        <input type="text" class="form-control" id="input-cdad-1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-cdad-4" class="form-label">總分 (%)</label>
                        <input type="text" class="form-control" id="input-cdad-2">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>NPI-Q分數</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-mpiq-1" class="form-label">嚴重程度</label>
                        <input type="text" class="form-control" id="input-mpiq-1" value=" /36">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-mpiq-2" class="form-label">困擾程度</label>
                        <input type="text" class="form-control" id="input-mpiq-2" value=" /60">
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">家居環境狀況</label>
                <div>
                    @foreach($living_condition as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="living-condition-{{$k}}">
                            <label class="form-check-label" for="living-condition-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 2)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-living-condition-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-install-phone" class="form-label">家居電話</label>
                <div>
                    @foreach($install_phone as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="install-phone-{{$k}}">
                            <label class="form-check-label" for="install-phone-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-safe-clock" class="form-label">平安鐘</label>
                <div>
                    @foreach($safe_clock as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="safe-clock-{{$k}}">
                            <label class="form-check-label" for="safe-clock-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 3)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-safe-clock-{{$k}}">
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
