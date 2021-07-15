<div class="form-container">
    <form>
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

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
