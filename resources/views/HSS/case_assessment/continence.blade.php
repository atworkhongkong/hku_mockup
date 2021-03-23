<div class="form-container">
    <form>
        @foreach($section14 as $topic => $items)
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-educational-levels" class="form-label">{{ $topic }}</label>
                    <div>
                        @foreach($items as $k => $v)
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="checkbox" id="cb-{{ $topic }}-{{$k}}">
                                <label class="form-check-label" for="cb-{{ $topic }}-{{$k}}">
                                    {{$v}}
                                </label>
                                @if ($topic == '理遺工具' && $k == 4)
                                    <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
                                @endif
                            </div>
                        @endforeach
                    </div>
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
