<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/volunteer_service/report" class="btn {{ Str::contains($full_url, 'volunteer_service/report') ? 'btn-primary' : 'btn-outline-primary' }}">義工時數總結</a>
    <a href="/ecs/volunteer/report?type=new" class="btn {{ Str::contains($full_url, 'type=new') ? 'btn-primary' : 'btn-outline-primary' }}">新增義工人數</a>
    <a href="/ecs/volunteer/report?type=accumulate" class="btn {{ Str::contains($full_url, 'type=accumulate') ? 'btn-primary' : 'btn-outline-primary' }}">累積義工人數</a>
</div>
