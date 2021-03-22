<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>(A) 統一評估機制</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-referral-date" class="form-label">轉介日期</label>
                        <input type="text" class="form-control" id="input-referral-date">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-staff" class="form-label">負責職員</label>
                        <input type="text" class="form-control" id="input-staff">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-assessment-date" class="form-label">評估日期</label>
                        <input type="text" class="form-control" id="input-assessment-date">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-result" class="form-label">評估結果</label>
                        <input type="text" class="form-control" id="input-result">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-follow-up-work" class="form-label">跟進工作</label>
                        <input type="text" class="form-control" id="input-follow-up-work">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>(B) 臨床草案評估</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-auto mb-3 form-check pl-5">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            已轉介進行臨床草案評估
                        </label>
                    </div>
                    <div class="col mb-3">
                        <input type="text" class="form-control" placeholder="請註明">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-staff2" class="form-label">負責職員</label>
                        <input type="text" class="form-control" id="input-staff2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="input-follow-up-work2">跟進工作</label>
                        <textarea class="form-control" id="input-follow-up-work2" rows="3"></textarea>
                    </div>
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
