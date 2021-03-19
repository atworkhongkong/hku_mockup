<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-application-method">個案來自</label>
                <select id="input-application-method" class="form-control mr-1" name="center">
                    @foreach($application_methods as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-referral-number">轉介機構檔案編號</label>
                <input type="text" class="form-control" id="input-referral-number">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-social-worker">跟進社工</label>
                <input type="text" class="form-control" id="input-social-worker" value="{{ isset($case) ? $case['sw'] : '' }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-status">狀態</label>
                <select id="input-status" class="form-control mr-1" name="center">
                    @foreach($statuses as $k => $v)
                        <option value="{{ $k }}" {{ !isset($case) && $k == 'not_process' ? 'SELECTED' : '' }}>{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-create-date">申請日期</label>
                <input type="text" class="form-control" id="input-create-date" value="{{ date('Y-m-d') }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
