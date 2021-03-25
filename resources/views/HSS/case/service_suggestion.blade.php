<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>即時提供服務</span>
            </div>
            <div class="p-3">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">服務</th>
                            <th scope="col">通知轉介日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(['膳食服務', '家居清潔', '護送服務', '個人護理', '其他'] as $k => $v)
                            <tr>
                                <td style="width:40px;">
                                    <input type="checkbox" id="cb-a1-{{ $k }}">
                                </td>
                                <td style="width:40%;">
                                    <label class="form-check-label" for="cb-a1-{{ $k }}">{{ $v }}</label>
                                    @if ($k ==  4)
                                        <span><input type="text" class="form-control d-inline-block ml-2" style="width:250px;" placeholder="{{ $v }}"></span>
                                    @endif
                                </td>
                                <td>
                                    <input type="date" class="form-control">
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">讓申請人初步了解，綜合家居照顧服務隊會最少每半年1次為個案進行檢討</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>登記輪候服務</span>
            </div>
            <div class="p-3">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">服務</th>
                            <th scope="col">通知轉介日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:40px;">
                                <input type="checkbox" id="cb-b1">
                            </td>
                            <td style="width:40%;">
                                <label class="form-check-label" for="cb-b1">
                                    安排登記輪候服務，並已讓申請人初步了解，綜合家居照顧服務隊會最少每半年1次為申請人進行檢討。
                                </label>
                            </td>
                            <td>
                                <input type="date" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>長期護理服務</span>
            </div>
            <div class="p-3">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">服務</th>
                            <th scope="col">通知轉介日期 / 服務跟進</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:40px;">
                                <input type="checkbox" id="cb-b1">
                            </td>
                            <td style="width:40%;">
                                <label class="form-check-label" for="cb-c1">
                                    申請人需要長期護理服務，建議為申請人進行安老服務統一評估，於申請人進行長期護理服務前，申綜合家居照顧服務(普通個案)提供支援。
                                </label>
                            </td>
                            <td>
                                <div><input type="date" class="form-control"></div>
                                <div class="my-3">
                                    <input type="checkbox" id="cb-c2">
                                    <label class="form-check-label ml-3" for="cb-c2">
                                        通知轉介單位跟進為申請人進行安老服務統一評估事宜
                                    </label>
                                </div>
                                <div class="my-3">
                                    <input type="checkbox" id="cb-c2">
                                    <label class="form-check-label ml-3" for="cb-c2">
                                        <div>已知悉轉介單位已跟進或將會跟進，為申請人進行安老服務統一評估事直</div>
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>不需要登記輪候服務</span>
            </div>
            <div class="p-3">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" colspan="3">&nbsp;</th>
                            <th scope="col">通知轉介日期 / 服務跟進</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(['原因', '其他建議'] as $k => $v)
                            <tr>
                                <td style="width:40px;">
                                    <input type="checkbox" id="cb-d{{ $k }}" class="mt-2">
                                </td>
                                <td>
                                    <label class="form-check-label" for="cb-d{{ $k }}">{{ $v }}︰</label>
                                </td>
                                <td>
                                    <span><input type="text" class="form-control d-inline-block ml-2" style="width:250px;" placeholder="{{ $v }}"></span>
                                </td>
                                <td style="width:57%;">
                                    <input type="date" class="form-control">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
