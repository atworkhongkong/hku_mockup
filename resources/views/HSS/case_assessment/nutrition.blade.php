<div class="form-container">
    <form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">項目</th>
                    <th scope="col" style="width:10%;">有</th>
                    <th scope="col" style="width:10%;">無</th>
                </tr>
            </thead>
            <tbody>
                @foreach($section10a as $k => $v)
                    <tr>
                        <td>{{ $v }}</td>
                        <td><input class="" type="radio" name="radio_section5c_{{ $k }}"></td>
                        <td><input class="" type="radio" name="radio_section5c_{{ $k }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p style="font-size:14px;" class="mb-5">* 若其中一項答「有」，請填 "Checklist for Nutritional Risk"</p>



        @foreach($section10b as $topic => $items)
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
                                @if ($topic == '特別餐' && $k == 6)
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
