<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-living-status" class="form-label">照顧者最想參加的服務</label>
                <div>
                    @foreach($form4_cb as $k => $f)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck{{$k}}">
                            <label class="form-check-label" for="defaultCheck{{$k}}">
                                {{$f}}
                            </label>
                            @if ($k == count($form4_cb) - 1)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="請填寫">
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
