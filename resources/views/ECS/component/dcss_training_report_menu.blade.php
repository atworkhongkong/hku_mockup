<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/dcss_training/report" class="btn {{ Str::contains($full_url, 'individual') ? 'btn-primary' : 'btn-outline-primary' }}">個人統計</a>
    <a href="/ecs/dcss_training/report?type=group" class="btn {{ Str::contains($full_url, 'group') ? 'btn-primary' : 'btn-outline-primary' }}">組別統計</a>
    <a href="/ecs/dcss_training/report?type=case_count" class="btn {{ Str::contains($full_url, 'case_count') ? 'btn-primary' : 'btn-outline-primary' }}">個案統計</a>
    <a href="/ecs/dcss_training/report?type=training_count" class="btn {{ Str::contains($full_url, 'training_count') ? 'btn-primary' : 'btn-outline-primary' }}">訓練統計</a>
    <a href="/ecs/dcss_staff_training/report" class="btn {{ Str::contains($full_url, 'training_session') ? 'btn-primary' : 'btn-outline-primary' }}">同工訓練</a>
    <a href="/ecs/dcss_training/report?type=ZBI" class="btn {{ Str::contains($full_url, 'ZBI') ? 'btn-primary' : 'btn-outline-primary' }}">ZBI</a>
</div>
