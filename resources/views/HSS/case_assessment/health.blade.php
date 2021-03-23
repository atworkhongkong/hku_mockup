<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>疾病</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-languages" class="form-label sr-only">疾病</label>
                        <div>
                            @foreach($section5a as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="section5a-{{$k}}">
                                    <label class="form-check-label" for="section5a-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 22)
                                        <input type="text" class="form-control d-inline-block ml-2" style="width:68%;" placeholder="請註明">
                                    @elseif ($k == 23)
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
                <span>活動能力</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-languages" class="form-label sr-only">活動能力</label>
                        <div>
                            @foreach($section5b as $k => $v)
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="section5b-{{$k}}">
                                    <label class="form-check-label" for="section5b-{{$k}}">
                                        {{$v}}
                                    </label>
                                    @if ($k == 8)
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
                <span>跌倒危機</span>
            </div>
            <div class="p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col" style="width:10%;">有</th>
                            <th scope="col" style="width:10%;">無</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($section5c as $k => $v)
                            <tr>
                                <td>{{ $v }}</td>
                                <td><input class="" type="radio" name="radio_section5c_{{ $k }}"></td>
                                <td><input class="" type="radio" name="radio_section5c_{{ $k }}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p style="font-size:14px;">* 若其中一項答「有」，請填 "The Downton Fall Risk Index"</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>老人痴呆 (可以問長者或其他人)*(長者個案適用)</span>
            </div>
            <div class="p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col" style="width:10%;">有</th>
                            <th scope="col" style="width:10%;">無</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($section6 as $k => $v)
                            <tr>
                                <td>{{ $v }}</td>
                                <td><input class="" type="radio" name="radio_section6_{{ $k }}"></td>
                                <td><input class="" type="radio" name="radio_section6_{{ $k }}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p style="font-size:14px;">
                    * 若其中一項答「有」，請用「簡短智能測驗」測試其老人痴呆的程度。<br>
                    若該長者已經醫生診斷患老人痴呆症，則不需填寫「簡短智能測驗」
                </p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>長者抑鬱 *(長者個案適用)</span>
            </div>
            <div class="p-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">項目</th>
                        <th scope="col" style="width:10%;">有</th>
                        <th scope="col" style="width:10%;">無</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($section7 as $k => $v)
                        <tr>
                            <td>{{ $v }}</td>
                            <td><input class="" type="radio" name="radio_section7_{{ $k }}"></td>
                            <td><input class="" type="radio" name="radio_section7_{{ $k }}"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p style="font-size:14px;">
                    * 若其中一項答「有」，請用「老人抑鬱及自殺風險評估」測試其抑鬱程度。<br>
                    若該長者已經醫生診斷患有抑鬱症，則不需填寫「老人抑鬱及自殺風險評估」
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
