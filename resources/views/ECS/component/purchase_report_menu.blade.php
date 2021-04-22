<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/purchase/report" class="btn {{ Str::contains($full_url, 'type=stock') ? 'btn-primary' : 'btn-outline-primary' }}">每月庫存總結</a>
    <a href="/ecs/purchase/report?type=profit" class="btn {{ Str::contains($full_url, 'type=profit') ? 'btn-primary' : 'btn-outline-primary' }}">每月價錢總結</a>
</div>
