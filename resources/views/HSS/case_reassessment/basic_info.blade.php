<div class="form-container">
    <form>
        <div class="row">
            <div class="col-auto form-group mb-3">
                <label for="input-referral-number">資料來源</label>
                <div class="d-flex align-items-center">
                    @php $field_name = 'source'; @endphp
                    @foreach($options[0][$field_name] as $k => $v)
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="source" id="input-{{ $field_name }}-{{ $k }}">
                            <label class="form-check-label" for="input-{{ $field_name }}-{{ $k }}">
                                {{ $v }}
                            </label>
                        </div>
                    @endforeach
                    <span><input type="text" class="form-control d-inline-block ml-2" placeholder="請註明"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-auto form-group mb-3">
                <label for="input-referral-number">重估方式</label>
                <div class="d-flex align-items-center">
                    @php $field_name = 'assessment_method'; @endphp
                    @foreach($options[0][$field_name] as $k => $v)
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="source" id="input-{{ $field_name }}-{{ $k }}">
                            <label class="form-check-label" for="input-{{ $field_name }}-{{ $k }}">
                                {{ $v }}
                            </label>
                        </div>
                    @endforeach
                    <span><input type="text" class="form-control d-inline-block ml-2" placeholder="請註明"></span>
                </div>
            </div>
        </div>

        @isset($reassessment)
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="field-create-date">重估日期</label>
                    <input type="date" class="form-control" id="field-create-date" value="{{ $reassessment['create_date'] }}" readonly>
                </div>
            </div>
        @endisset

        <div class="row">
            <div class="col-12 mb-3">
                <label for="field-staff">工作員</label>
                <input type="text" class="form-control" id="field-staff" @isset($assessment)value="{{ $assessment['created_by'] }}"@endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
                <button type="submit" class="btn btn-danger">刪 除</button>
            </div>
        </div>
    </form>
</div>
