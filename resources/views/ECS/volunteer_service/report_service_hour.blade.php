<div class="alert alert-primary" role="alert">
    某個中心義工小組的時數總結
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <span>找到{{ count($services) }}筆記錄</span>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">義工編號</th>
                <th scope="col">義工姓名</th>
                <th scope="col">活躍程度</th>
                <th scope="col">級別</th>
                <th scope="col">STE/Non-STE</th>
                <th scope="col">時數</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $s)
                <tr>
                    <td><a href="/ecs/volunteer/{{ $s['volunteer_id'] }}/edit" target="_blank">{{ $s['code'] }}</a></td>
                    <td>{{ $s['volunteer'] }}</td>
                    <td>{{ $activeness[$s['activeness']] }}</td>
                    <td>{{ $s['grade'] }}</td>
                    <td>{{ $s['ste'] }}</td>
                    <td>{{ $s['hour'] }}</td>
                </tr>
            @endforeach
            <tr>
                <td class="text-right" colspan="5">總時數︰</td>
                <td>37</td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-primary">匯出</button>
    </div>
</div>
