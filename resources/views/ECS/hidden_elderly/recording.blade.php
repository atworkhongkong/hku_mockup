<div class="form-container">
    <p class="text-right"><button class="btn btn-secondary">新增紀錄</button></p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">跟進日期</th>
                <th scope="col">內容</th>
                <th scope="col">建立者</th>
                <th scope="col">建立日期</th>
                <th scope="col" style="width:10%;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2021-01-31</td>
                <td>身體康復良好，與家人關係...</td>
                <td>社工A</td>
                <td>2021-02-02</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recording-modal">編輯</button></td>
            </tr>
            <tr>
                <td>2021-01-01</td>
                <td>沒有受傷或輕微受傷，無須接受治療；受傷部位...</td>
                <td>社工A</td>
                <td>2021-01-08</td>
                <td><a class="btn btn-primary" data-toggle="modal" data-target="#recording-modal" href="javascript:void(0);">編輯</a></td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="recording-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">2021-01-31</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">內容</label>
                            <textarea class="form-control" id="message-text" rows="3">身體康復良好，與家人關係亦見改善</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">刪除</button>
                    <button type="button" class="btn btn-primary">提交</button>
                </div>
            </div>
        </div>
    </div>
</div>
