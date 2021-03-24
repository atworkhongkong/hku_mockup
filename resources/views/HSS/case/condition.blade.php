<div class="form-container">
    <form>
        @foreach($conditions as $k => $cds)
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>({{ $k }}) {{ $cds['title'] }}</span>
                </div>
                <div class="p-3">
                    @foreach($cds['choices'] as $choice_key => $choice)
                        <div class="row my-3">
                            <div class="col-12 d-flex align-items-center">
                                <div>
                                    <input class="" type="checkbox" id="cb-{{ $k }}-{{ $choice_key }}">
                                    <label class="form-check-label" for="cb-{{ $k }}-{{ $choice_key }}">
                                        {{ $choice }}
                                    </label>
                                </div>
                                @if ($cds['extra_field'] && in_array($choice_key, $cds['extra_field']))
                                    <span><input type="text" class="form-control d-inline-block ml-2" style="width:600px;" placeholder="請註明"></span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
