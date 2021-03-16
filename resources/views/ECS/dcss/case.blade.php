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
                <label for="input-group" class="form-label">組別</label>
                <input type="text" class="form-control" id="input-group" @isset($case_id) value="{{ $case['group'] }}" @endisset>
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
                <input type="text" class="form-control" id="input-scope">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-from" class="form-label">個案來自</label>
                <select class="form-control" id="input-from">
                    <option></option>
                    <option>醫院管理局個案</option>
                    <option>非醫院管理局個案</option>
                    <option>轉介個案</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-burden" class="form-label">Burden</label>
                <select class="custom-select" aria-label="Disabled select example">
                    <option></option>
                    <option value="Greater" {{ isset($case) && $case['burden'] == 'Greater' ? 'SELECTED' : '' }}>Greater Carer Burden</option>
                    <option value="Lesser" {{ isset($case) && $case['burden'] == 'Lesser' ? 'SELECTED' : '' }}>Lesser Carer Burden</option>
                    <option value="No_carer" {{ isset($case) && $case['burden'] == 'No_carer' ? 'SELECTED' : '' }}>No Carer Burden</option>
                </select>
            </div>
        </div>

        @isset($case_id)
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-create-date" class="form-label">建立日期</label>
                    <input type="text" class="form-control" id="input-create-date" readonly value="2020-xx-xx">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-status" class="form-label">狀態</label>
                    <select class="form-control" id="input-status">
                        @foreach($statuses as $s)
                            <option value="">{{ $s }}</option>
                        @endforeach
                    </select>
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
