<!-- Modal -->
<div class="modal fade" id="edit-duty-roster-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 820px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">編更</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">日期</div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" value="2020-01-18" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="field-attend" class="col-form-label">出勤</label>
                        <div>
                            <select id="field-attend" class="form-control mr-2" name="attend">
                                <option value=""></option>
                                <option value="1">全日</option>
                                <option value="2" SELECTED>第1節</option>
                                <option value="3">第2節</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="field-not-attend" class="col-form-label">缺勤</label>
                        <div>
                            <select id="field-not-attend" class="form-control mr-2" name="not_attend">
                                <option value=""></option>
                                <option value="1">上午AL</option>
                                <option value="2" SELECTED>下午AL</option>
                                <option value="3">上午SL</option>
                                <option value="4">下午SL</option>
                                <option value="5">上午CL</option>
                                <option value="6">下午CL</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">新增</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#select-all").click(function() {
        $(".delivery-time").prop( "checked", $(this).is( ":checked" ) );
    })
</script>
