<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="field-create-date">評估日期</label>
                <input type="date" class="form-control" id="field-create-date" value="{{ date('Y-m-d') }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="field-staff">工作員</label>
                <input type="text" class="form-control" id="field-staff" @isset($assessment)value="{{ $assessment['created_by'] }}"@endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
