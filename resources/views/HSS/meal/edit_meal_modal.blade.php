<!-- Modal -->
<div class="modal fade" id="edit-meal-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 820px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">新增膳食安排</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">開始日期</div>
                            <div class="col-6">完結日期</div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="date" class="form-control" value="2020-12-01">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" value="2021-01-31">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">送餐時段:</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="select-all" value="">
                                <label class="form-check-label" for="select-all">全選</label>
                            </div>
                        </div>
                        @foreach([1 => '一', 2 => '二', 3 => '三', 4 => '四', 5 => '五', 6 => '六', 7 => '日'] as $k => $d)
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input delivery-time" type="checkbox" id="{{ $k }}-am" {{ in_array($k, [1, 3, 5]) ? "CHECKED" : "" }}>
                                    <label class="form-check-label" for="mon-am">星期{{ $d }}中午</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input delivery-time" type="checkbox" id="{{ $k }}-pm"  {{ in_array($k, [1, 3]) ? "CHECKED" : "" }}>
                                    <label class="form-check-label" for="mon-pm">星期{{ $d }}晚上</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">餐種:</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-1" value="" CHECKED>
                                <label class="form-check-label" for="meal-type-1">正常餐</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-2" value="">
                                <label class="form-check-label" for="meal-type-2">攪碎餐</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-3" value="">
                                <label class="form-check-label" for="meal-type-3">低鹽餐</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-4" value="">
                                <label class="form-check-label" for="meal-type-4">糖尿餐</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-5" value="">
                                <label class="form-check-label" for="meal-type-5">痛風症餐</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="meal-type-6" value="">
                                <label class="form-check-label" for="meal-type-6">薄血餐</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="avoid-food" class="col-form-label">避免食物:</label>
                        <input type="text" class="form-control" id="avoid-food" value="海鮮">
                    </div>
                    <div class="mb-3">
                        <label for="remark" class="col-form-label">備註:</label>
                        <input type="text" class="form-control" id="remark">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">特別加送</div>
                            <div class="col-6">特別不送</div>
                        </div>
                        <div class="row">
                            @foreach([1, 2] as $num)
                                <div class="col-3">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <select class="custom-select form-inline mr-1" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="am">午餐</option>
                                        <option value="pm">晚餐</option>
                                        <option value="all">全日餐</option>
                                    </select>
                                    <span>
                                        <i class="far fa-trash-alt"></i>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            停飯至另行通知
                        </label>
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
