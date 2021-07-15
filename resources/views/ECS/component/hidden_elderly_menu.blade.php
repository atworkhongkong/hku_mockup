<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/hidden_elderly/report" class="btn {{ $type == 'new' ? 'btn-primary' : 'btn-outline-primary' }}">新增個案</a>
    <a href="/ecs/hidden_elderly/report?type=reactivate" class="btn {{ $type == 'reactivate' ? 'btn-primary' : 'btn-outline-primary' }}">重啟個案</a>
    <a href="/ecs/hidden_elderly/report?type=close" class="btn {{ $type == 'close' ? 'btn-primary' : 'btn-outline-primary' }}">結束個案</a>
    <a href="/ecs/hidden_elderly/report?type=summary" class="btn {{ $type == 'summary' ? 'btn-primary' : 'btn-outline-primary' }}">總結</a>
</div>
