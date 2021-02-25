<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-case-number" class="form-label">識別編號</label>
                <input type="text" class="form-control" id="input-case-number" @isset($case_id) value="{{ $case['case_number'] }}" @endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-assessor" class="form-label">評估員</label>
                <input type="text" class="form-control" id="input-assessor" @isset($case_id) value="{{ $case['assessor'] }}" @endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-scope" class="form-label">服務(面談)時數及範疇</label>
                <input type="text" class="form-control" id="input-scope" @isset($case_id) value="{{ $case['scope'] }}" @endisset>
            </div>
        </div>

        @isset($case_id)
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-create-date" class="form-label">建立日期</label>
                <input type="text" class="form-control" id="input-create-date" readonly value="{{ $case['create_date'] }}">
            </div>
        </div>
        @endisset

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
