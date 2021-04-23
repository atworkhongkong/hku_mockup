<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>申請人</span>
            </div>
            <div class="p-3">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        身體缺損
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        照顧壓力大
                    </label>
                    <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:50%;" id="field-other" placeholder="其他: 如壓力測試結果">
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        高齡 (60歲或以上)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">
                        需要社交及情緒支援
                    </label>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>被照顧者</span>
            </div>
            <div class="p-3">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">
                        行動不便
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck6">
                        患有長期疾病
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                    <label class="form-check-label" for="defaultCheck7">
                        患有認知障礙症
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-center" class="form-label">所屬中心</label>
                <select class="custom-select" aria-label="select example">
                    <option value=""></option>
                    @foreach($centers as $k => $c)
                        <option value="{{ $k + 1 }}">{{ $c }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-type" class="form-label">護老者級別</label>
                <select class="form-control" id="input-type">
                    <option></option>
                    <option value="oc">護老者</option>
                    <option value="nc">有需要護老者</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-long-care" class="form-label">長期照顧</label>
                <select class="custom-select" aria-label="select example">
                    <option value=""></option>
                    <option value="">需長期照顧</option>
                    <option value="">不需長期照顧</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-center" class="form-label">狀態</label>
                <select class="custom-select" aria-label="select example">
                    @foreach($statuses as $s)
                        <option value="">{{ $s }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-remark" class="form-label">個案檢討</label>
                <textarea class="form-control" id="input-remark" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">列 印</button>
            </div>
        </div>

    </form>
</div>
