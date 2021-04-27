<div class="row">
    <div class="col-12 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <span>找到{{ $count }}筆記錄</span>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">義工編號</th>
                <th scope="col">義工姓名</th>
                <th scope="col">活躍程度</th>
                <th scope="col">級別</th>
                <th scope="col">STE/Non-STE</th>
                <th scope="col">首次登記日期</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 1 ; $i <= $count ; $i++)
                <tr>
                    <td><a href="/ecs/volunteer/{{ $i }}/edit" target="_blank">{{ $volunteers[$i]['code'] }}</a></td>
                    <td>{{ $volunteers[$i]['name'] }}</td>
                    <td>活躍義工</td>
                    <td>{{ $grades[$volunteers[$i]['grade']] }}</td>
                    <td>{{ $volunteers[$i]['STE'] }}</td>
                    <td>{{ $volunteers[$i]['register_date'] }}</td>
                </tr>
            @endfor
            </tbody>
        </table>
        <button class="btn btn-primary">匯出</button>
    </div>
</div>
