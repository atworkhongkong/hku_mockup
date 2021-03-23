<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>非正式支援系統</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-educational-levels" class="form-label sr-only"></label>
                        <div>
                            @foreach($section15a as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" id="cb-{{$k}}">
                                    <label class="form-check-label" for="cb-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 3)
                                        <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-carer" class="form-label">照顧者</label>
                        <input type="text" class="form-control" id="input-carer">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-phone" class="form-label">聯絡電話</label>
                        <input type="text" class="form-control" id="input-phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-educational-levels" class="form-label">所提供之照顧</label>
                        <div>
                            @foreach($section15b as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" id="cb-15-{{ $k }}-{{ $v }}">
                                    <label class="form-check-label" for="cb-15-{{ $k }}-{{ $v }}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 3)
                                        <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>正式支援系統</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-educational-levels" class="form-label sr-only"></label>
                        <div>
                            @foreach($section16 as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" id="cb-16-{{ $k }}">
                                    <label class="form-check-label" for="cb-16-{{ $k }}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 9)
                                        <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>其他補充資料</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-educational-levels" class="form-label sr-only"></label>
                        <div>
                            @foreach($section17 as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" id="cb-17-{{ $k }}">
                                    <label class="form-check-label" for="cb-17-{{ $k }}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 4)
                                        <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
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
