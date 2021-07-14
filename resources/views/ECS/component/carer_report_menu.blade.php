<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/carer_service/report?type=nc_report" class="btn {{ $type == 'nc_report' ? 'btn-primary' : 'btn-outline-primary' }}">有需要護老者服務數據</a>
    <a href="/ecs/carer_service/report?type=oc_report" class="btn {{ $type == 'oc_report' ? 'btn-primary' : 'btn-outline-primary' }}">護老者服務數據</a>
    <a href="/ecs/carer/report?type=new" class="btn {{ $type == 'new' ? 'btn-primary' : 'btn-outline-primary' }}">新增人數</a>
    <a href="/ecs/carer/report?type=accumulate" class="btn {{ $type == 'accumulate' ? 'btn-primary' : 'btn-outline-primary' }}">累積人數</a>
    <a href="/ecs/carer/report?type=transfer" class="btn {{ $type == 'transfer' ? 'btn-primary' : 'btn-outline-primary' }}">轉移人數</a>
    <a href="/ecs/carer/report?type=reactivate" class="btn {{ $type == 'reactivate' ? 'btn-primary' : 'btn-outline-primary' }}">重啟人數</a>
    <a href="/ecs/carer/report?type=close" class="btn {{ $type == 'close' ? 'btn-primary' : 'btn-outline-primary' }}">結案人數</a>
    <a href="/ecs/carer/report?type=active" class="btn {{ $type == 'active' ? 'btn-primary' : 'btn-outline-primary' }}">活躍人數</a>
</div>
