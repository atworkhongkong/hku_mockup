<!-- Modal -->
<div class="modal fade" id="move-to-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 820px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">移至</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">送飯員</div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <select class="custom-select form-inline mr-1" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="-1">--- 待定 ---</option>
                                    @foreach($care_workers as $k => $cw)
                                        <option value="{{ $k }}">{{ $cw['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">確定</button>
            </div>
        </div>
    </div>
</div>
