<div class="form-container">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-chi-name" class="form-label">中文姓名</label>
                <input type="text" class="form-control" id="input-chi-name" @isset($case_id) value="{{ $case['name'] }}" @endisset>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-eng-name" class="form-label">英文姓名</label>
                <input type="text" class="form-control" id="input-eng-name">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-gender">性別</label>
                <select class="form-control" id="input-gender">
                    <option value="M">男</option>
                    <option value="F">女</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-dob" class="form-label">出生日期</label>
                <input type="text" class="form-control" id="input-dob">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-address" class="form-label">住址</label>
                <input type="text" class="form-control" id="input-address">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-phone" class="form-label">住宅電話</label>
                <input type="text" class="form-control" id="input-phone">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-mobile" class="form-label">手提電話</label>
                <input type="text" class="form-control" id="input-mobile">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-marriage">婚姻狀況</label>
                <select class="form-control" id="input-marriage">
                    <option>單身</option>
                    <option>已婚</option>
                    <option>離婚</option>
                    <option>喪偶</option>
                    <option>同居</option>
                    <option>不清楚</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-group">服務使用者組別</label>
                <select class="form-control" id="input-group">
                    <option>老人(六十歲或以上)</option>
                    <option>傷殘</option>
                    <option>家庭/社會需要</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
