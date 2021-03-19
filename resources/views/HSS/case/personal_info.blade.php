<div class="form-container">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-chi-name" class="form-label">中文姓名</label>
                <input type="text" class="form-control" id="input-chi-name" @isset($case) value="{{ $case['name'] }}" @endisset>
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
                <label for="input-hkid" class="form-label">身份證號碼</label>
                <input type="text" class="form-control" id="input-hkid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-age" class="form-label">年齡</label>
                <input type="text" class="form-control" id="input-age">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-dob" class="form-label">出生日期</label>
                <input type="text" class="form-control" id="input-dob" @isset($case) value="{{ $case['dob'] }}" @endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-address" class="form-label">地址</label>
                <input type="text" class="form-control" id="input-address">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-phone" class="form-label">電話</label>
                <input type="text" class="form-control" id="input-phone">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-languages" class="form-label">語言</label>
                <input type="text" class="form-control" id="input-languages">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-origin" class="form-label">籍貫</label>
                <input type="text" class="form-control" id="input-origin">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-marriage-status" class="form-label">婚姻狀況</label>
                <select id="input-marriage-status" class="form-control">
                    <option value=""></option>
                    @foreach($marriage_statuses as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-religion" class="form-label">宗教</label>
                <input type="text" class="form-control" id="input-religion">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-education" class="form-label">教育程度</label>
                <select id="input-education" class="form-control">
                    <option value=""></option>
                    @foreach($education_levels as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
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
