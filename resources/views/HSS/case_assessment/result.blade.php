<div class="form-container">
    <form>
        <div class="row">
            <div class="col-auto form-group mb-5">
                <label for="input-referral-number">服務</label>
                <div class="d-flex align-items-center">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="service" id="input-service-yes">
                        <label class="form-check-label" for="input-service-yes">
                            提供服務
                        </label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="service" id="input-service-no">
                        <label class="form-check-label" for="input-service-no">
                            不提供服務
                        </label>
                    </div>
                    <span><input type="text" class="form-control d-inline-block ml-2" placeholder="請註明原因"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">家居照顧服務項目</th>
                            <th scope="col" colspan="2" class="text-center">評估結果<br>(需要提供服務)</th>
                            <th scope="col" class="text-center">提供服務次數</th>
                            <th scope="col" class="text-center">提供服務內容</th>
                            <th scope="col" class="text-center">備註</th>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <th scope="col" class="text-center">平日</th>
                            <th scope="col" class="text-center">假日</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($section18 as $v)
                            <tr>
                                <td>{{ $v }}</td>
                                <td class="text-center"><input class="" type="checkbox"></td>
                                <td class="text-center"><input class="" type="checkbox"></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-date" class="form-label">協議服務提供日期</label>
                <input type="date" class="form-control" id="input-date">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-charge-level" class="form-label">收費級別</label>
                <select id="input-charge-level" class="form-control">
                    <option></option>
                    @foreach(range(1, 3) as $v)
                        <option value="{{ $v }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-payment-method" class="form-label">繳費方式</label>
                <select id="input-charge-level" class="form-control">
                    <option></option>
                    <option value="">現金</option>
                    <option value="">支票</option>
                </select>
            </div>
        </div>

        <p>備註︰服務隊只提供半年服務，其後再進行檢討評估，才決定是否繼續提供服務。</p>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
