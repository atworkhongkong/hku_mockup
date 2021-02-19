<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-year" class="form-label">照顧年期</label>
                <input type="text" class="form-control" id="input-year">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-relationship" class="form-label">需要提供照顧時間</label>
                <select class="form-control" id="input-relationship">
                    <option></option>
                    <option value="">間中</option>
                    <option value="">少於半天</option>
                    <option value="">半天</option>
                    <option value="">整天</option>
                    <option value="">其他</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-other" class="form-label">需要提供照顧時間 - 其他</label>
                <input type="text" class="form-control" id="input-other" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-living-status" class="form-label">遇上困難時，你會找誰協助</label>
                <div>
                    @foreach($form2_cb as $k => $f)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck{{$k}}">
                            <label class="form-check-label" for="defaultCheck{{$k}}">
                                {{$f}}
                            </label>
                            @if ($k == 6)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="其他">
                            @endif
                        </div>
                    @endforeach

                    <div class="form-group">
                        <label for="formGroupExampleInput"></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="其他">
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
