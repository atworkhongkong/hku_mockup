<div class="form-container">
    <form>
        @isset($case)
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-case-number">個案編號</label>
                    <input type="text" class="form-control" id="input-case-number" value="{{ $case['case_number'] }}">
                </div>
            </div>
        @endisset

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-application-method">個案來自</label>
                <select id="input-application-method" class="form-control mr-1" name="center">
                    @foreach($application_methods as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-referral-number">轉介機構檔案編號</label>
                <input type="text" class="form-control" id="input-referral-number">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input-has-social-assistance">是否領取綜合社會保障援助/長者生活津貼</label>
                <select class="form-control" id="input-has-social-assistance">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-assistance-number">檔案編號</label>
                <input type="text" class="form-control" id="input-assistance-number" disabled>
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
                <label for="input-create-date">申請日期</label>
                <input type="text" class="form-control" id="input-create-date" value="{{ date('Y-m-d') }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-status">狀態</label>
                <select id="input-status" class="form-control mr-1" name="center" {{ !isset($case) ? 'DISABLED' : '' }}>
                    @foreach($statuses as $k => $v)
                        <option value="{{ $k }}" {{ !isset($case) && $k == 'not_process' ? 'SELECTED' : '' }}>{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row" id="close-reasons" style="display:none;">
            <div class="col-12 mb-3">
                <label for="input-close-reason" class="form-label">終止服務原因</label>
                <div>
                    @foreach($close_reasons as $k => $v)
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="close-reason-{{$k}}">
                            <label class="form-check-label" for="close-reason-{{$k}}">
                                {{$v}}
                            </label>
                            @if ($k == 11)
                                <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:60%;" id="field-reason-other">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>


@section('top_script')
    <script>
        $(function() {
            $("#input-status").change(function() {
                if ($(this).val() === 'closed') {
                    $('#close-reasons').show();
                } else {
                    $('#close-reasons').hide();
                }
            });
            $("#input-has-social-assistance").change(function() {
                if ($(this).val() === '1') {
                    $('#input-assistance-number').prop('disabled', false);
                } else {
                    $('#input-assistance-number').prop('disabled', true);
                }
            })
        });
    </script>
@endsection
