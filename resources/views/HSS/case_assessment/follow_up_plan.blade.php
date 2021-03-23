<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="field-plan">照顧計劃</label>
                <textarea class="form-control" id="field-plan" rows="8"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="follow-up-suggestion">跟進工作建議</label>
                <select class="form-control" id="follow-up-suggestion">
                    <option value=""></option>
                    <option value="1">轉介統一評估機制</option>
                    <option value="2">轉介進行Clinical Protocol</option>
                </select>
            </div>
        </div>

        <div class="row" id="referral-date-row" style="display:none;">
            <div class="col-12 mb-3">
                <label for="referral-date">轉介日期</label>
                <input type="date" class="form-control" id="referral-date">
            </div>
        </div>

        <div class="row" id="referral-clinical-row" style="display:none;">
            <div class="col-12 mb-3">
                <label for="referral-clinical">註明</label>
                <input type="text" class="form-control" id="referral-clinical">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label for="staff">負責職員</label>
                <input type="text" class="form-control" id="staff">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>

@section('bottom_script')
    <script>
        $(function() {
            $("#follow-up-suggestion").change(function() {
                if ($(this).val() === "1") {
                    $("#referral-clinical-row").hide();
                    $("#referral-date-row").show();
                    $("#referral-date").focus();
                } else if ($(this).val() === "2") {
                    $("#referral-date-row").hide();
                    $("#referral-clinical-row").show();
                    $("#referral-clinical").focus();
                }
            });
        })
    </script>
@endsection
