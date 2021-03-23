<div class="form-container">
    <form>
        @foreach($section13 as $topic => $items)
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
