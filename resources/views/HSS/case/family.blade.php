<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-family-count" class="form-label">與申請人同住的家人或親戚的數目</label>
                <select id="input-family-count" class="form-control">
                    <option></option>
                    @foreach(range(0, 20) as $v)
                        <option value="{{ $v }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-health-status">健康狀況</label>
                <textarea class="form-control" id="input-health-status" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="input-inflection" class="form-label">是否有任何傳染性疾病</label>
                <select id="input-inflection" class="form-control">
                    <option value=""></option>
                    @foreach(['是', '否'] as $k => $v)
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
