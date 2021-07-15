<div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
    <a href="/ecs/dcss_training/report" class="btn {{ Str::contains($full_url, 'individual') ? 'btn-primary' : 'btn-outline-primary' }}">個人統計</a>
    <a href="/ecs/dcss_training/report?type=group" class="btn {{ Str::contains($full_url, 'group') ? 'btn-primary' : 'btn-outline-primary' }}">組別統計</a>
    <a href="/ecs/dcss_training/report?type=case_count" class="btn {{ Str::contains($full_url, 'case_count') ? 'btn-primary' : 'btn-outline-primary' }}">個案統計</a>
    <a href="/ecs/dcss_training/report?type=training_count" class="btn {{ Str::contains($full_url, 'training_count') ? 'btn-primary' : 'btn-outline-primary' }}">訓練統計</a>
    <a href="/ecs/dcss_staff_training/report" class="btn {{ Str::contains($full_url, 'training_session') ? 'btn-primary' : 'btn-outline-primary' }}">同工訓練</a>
    <a href="/ecs/dcss/report?type=service_questionnaire" class="btn {{ Str::contains($full_url, 'service_questionnaire') ? 'btn-primary' : 'btn-outline-primary' }}">服務問卷</a>
    <a href="/ecs/dcss_training/report?type=ZBI" class="btn {{ Str::contains($full_url, 'ZBI') ? 'btn-primary' : 'btn-outline-primary' }}">ZBI</a>
    <a href="/ecs/dcss/report?type=escort_questionnaire" class="btn {{ Str::contains($full_url, 'escort_questionnaire') ? 'btn-primary' : 'btn-outline-primary' }}">護送問卷</a>
    <a href="/ecs/dcss_training/report?type=transport" class="btn {{ Str::contains($full_url, 'transport') ? 'btn-primary' : 'btn-outline-primary' }}">護送</a>
    <a href="/ecs/dcss_training/report?type=subsidy" class="btn {{ Str::contains($full_url, 'subsidy') ? 'btn-primary' : 'btn-outline-primary' }}">交通資助</a>
    <a href="/ecs/dcss_training/report?type=fee" class="btn {{ Str::contains($full_url, 'fee') ? 'btn-primary' : 'btn-outline-primary' }}">費用</a>
    <a href="/ecs/dcss/report?type=close" class="btn {{ Str::contains($full_url, 'close') ? 'btn-primary' : 'btn-outline-primary' }}">退出個案</a>
    <a href="/ecs/dcss/report?type=attrition" class="btn {{ Str::contains($full_url, 'attrition') ? 'btn-primary' : 'btn-outline-primary' }}">不參加</a>
</div>
