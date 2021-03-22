<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 form-group mb-3">
                @foreach($options[1] as $k1 => $v1)
                    <div class="d-flex align-items-center" style="height:70px;">
                        <label for="input-referral-number" class="mt-2" style="min-width:170px;">{{ $v1['name'] }}</label>
                        <div class="d-flex align-items-center">
                            @foreach($v1['opts'] as $k2 => $v2)
                                <div class="form-check mr-4">
                                    <input class="form-check-input" type="radio" name="{{ $v1['field'] }}" id="input-{{ $v1['field'] }}-{{ $k2 }}">
                                    <label class="form-check-label" for="input-{{ $v1['field'] }}-{{ $k2 }}">
                                        {{ $v2 }}
                                    </label>
                                </div>
                            @endforeach
                            <span><input type="text" class="form-control d-inline-block ml-2" placeholder="如有︰請註明"></span>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
