<!-- Modal -->
<style>
    .recipient-wrapper {
        border:1px solid #D9D9D9;
        width:100%;
        height: 40px;
        border-radius:5px;
        padding:5px;
        display:flex;
        align-items:center;
    }
    .recipient {
        background-color: #D9534F;
        color: white;
        font-size: 0.9rem;
        padding: 3px 8px;
        margin: 0 5px;
        border-radius: 5px;
    }
    .recipient > .far {
        margin-left: 10px;
        cursor: pointer;
    }
</style>
<div class="modal fade" id="create-notification" tabindex="-1" aria-labelledby="CreateNotification" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">即時傳遞通知</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">接收人:</label>
                    <div class="recipient-wrapper">
                        <div class="recipient">同事A <i class="far fa-times"></i></div>
                        <div class="recipient">同事B <i class="far fa-times"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">訊息:</label>
                    <textarea class="form-control" id="message-text">有新轉介個案，請留意。</textarea>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">訊息:</label>
                    <input type="text" class="form-control" placeholder="訊息連結至">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">傳送</button>
            </div>
        </div>
    </div>
</div>
