<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-languages" class="form-label">確診疾病</label>
                <div>
                    @foreach($disease as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="disease-{{$k}}">
                            <label class="form-check-label" for="disease-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 13)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-disease-other">
                            @elseif ($k == 15)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-educational-levels" class="form-label">覆診專科</label>
                <div>
                    @foreach($doctor_specialist as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="doctor-specialist-{{$k}}">
                            <label class="form-check-label" for="doctor-specialist-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    <input type="text" class="form-control form-control-sm d-inline-block" style="width:100px;"> 醫院 /
                    <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:100px;"> 診所
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-physique" class="form-label">體格</label>
                <div>
                    @foreach($physique as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="physique-{{$k}}">
                            <label class="form-check-label" for="physique-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-face" class="form-label">面色</label>
                <div>
                    @foreach($face as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="face-{{$k}}">
                            <label class="form-check-label" for="face-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-economic-statuses" class="form-label">皮膚</label>
                <div>
                    @foreach($skin as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="skin-{{$k}}">
                            <label class="form-check-label" for="skin-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 2 || $k == 3)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-skin-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-vision" class="form-label">視力</label>
                <div>
                    @foreach($vision as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="vision-{{$k}}">
                            <label class="form-check-label" for="vision-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-hearing" class="form-label">聽力</label>
                <div>
                    @foreach($hearing as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="hearing-{{$k}}">
                            <label class="form-check-label" for="hearing-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-tooth" class="form-label">牙齒</label>
                <div>
                    @foreach($tooth as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="tooth-{{$k}}">
                            <label class="form-check-label" for="tooth-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-diet" class="form-label">膳食</label>
                <div>
                    @foreach($diet as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="diet-{{$k}}">
                            <label class="form-check-label" for="diet-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-food-allergy" class="form-label">食物敏感</label>
                <div>
                    @foreach($food_allergy as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="food-allergy-{{$k}}">
                            <label class="form-check-label" for="food-allergy-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-food-allergy-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-appetite" class="form-label">胃口</label>
                <div>
                    @foreach($appetite as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="appetite-{{$k}}">
                            <label class="form-check-label" for="appetite-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 4 || $k == 5)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-appetite-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-smoking" class="form-label">吸煙</label>
                <div>
                    @foreach($smoking as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="smoking-{{$k}}">
                            <label class="form-check-label" for="smoking-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-smoking-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-smoking" class="form-label">飲酒</label>
                <div>
                    @foreach($beer as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="beer-{{$k}}">
                            <label class="form-check-label" for="beer-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-beer-{{$k}}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-urination" class="form-label">排尿</label>
                <div>
                    @foreach($urination as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="urination-{{$k}}">
                            <label class="form-check-label" for="urination-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-defecation" class="form-label">排便</label>
                <div>
                    @foreach($defecation as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defecation-{{$k}}">
                            <label class="form-check-label" for="defecation-{{$k}}">
                                {{$v}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-smoking" class="form-label">藥物敏感</label>
                <div>
                    @foreach($drug_allergy as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="drug-allergy-{{$k}}">
                            <label class="form-check-label" for="drug-allergy-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="field-drug-allergy-{{$k}}">
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
