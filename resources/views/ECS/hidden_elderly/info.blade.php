<div class="form-container">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-center" class="form-label">所屬中心</label>
                <select class="custom-select" aria-label="select example">
                    <option value=""></option>
                    @foreach($centers as $k => $c)
                        <option value="{{ $k + 1 }}" {{ $k == $hidden_elderly['center_id'] ? 'SELECTED' : '' }}>{{ $c }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-source" class="form-label">轉介來源</label>
                <input type="text" class="form-control" id="input-source">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-case-number" class="form-label">個案編號</label>
                <input type="text" class="form-control" id="input-case-number">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-case-type" class="form-label">個案類別</label>
                <select class="custom-select" aria-label="select example" id="input-case-type">
                    <option></option>
                    <option value="">Potential Case</option>
                    <option value="">Networked Case</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-name" class="form-label">姓名/稱呼</label>
                <input type="text" class="form-control" id="input-name" value="{{ $hidden_elderly['name'] }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-gender">性別</label>
                <select class="custom-select" aria-label="select example">
                    <option value="M" {{ $hidden_elderly['gender'] == 'M' ? 'SELECTED' : '' }}>男</option>
                    <option value="F" {{ $hidden_elderly['gender'] == 'F' ? 'SELECTED' : '' }}>女</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-district" class="form-label">接觸地區</label>
                <input type="text" class="form-control" id="input-district" value="{{ $hidden_elderly['district'] }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-dob-year">出生年份</label>
                <input type="text" class="form-control" id="input-dob-year" value="{{ $hidden_elderly['dob_year'] }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-age" class="form-label">年齡 <small>(自動計算/自行輸入)</small></label>
                <input type="text" class="form-control" id="input-age" value="{{ $hidden_elderly['age'] }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-living-condition" class="form-label">居住情況</label>
                <input type="text" class="form-control" id="input-living-condition">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-home-type" class="form-label">居所類別</label>
                <input type="text" class="form-control" id="input-home-type">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-status" class="form-label">個案狀況</label>
                <select class="custom-select" aria-label="select example">
                    @foreach($statuses as $k => $s)
                        <option value="{{ $k }}">{{ $s }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-create-date">個案開啟日期</label>
                <input type="text" class="form-control" id="input-create-date" value="{{ $hidden_elderly['create_date'] }}" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-age" class="form-label">個案重啟日期</label>
                <input type="text" class="form-control" id="input-age" value="">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-create-date">個案結束日期</label>
                <input type="text" class="form-control" id="input-create-date" value="">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-close-reason">結束原因</label>
                <textarea class="form-control" id="input-close-reason" rows="3"></textarea>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">更 新</button>
        </div>
    </form>
</div>
