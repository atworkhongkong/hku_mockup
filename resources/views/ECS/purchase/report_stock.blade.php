<div class="d-flex justify-content-between align-items-center mb-1">
    <span>找到{{ count($stock_reports) }}筆記錄</span>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">貨品</th>
            <th scope="col">承上月數量</th>
            <th scope="col">本月購入</th>
            <th scope="col">售出數量</th>
            <th scope="col">本月餘額</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stock_reports as $r)
            <tr>
                <td><a href="/ecs/product/{{ $r['product_id'] }}/edit" target="_blank">{{ $products[$r['product_id']]['name'] }}</a></td>
                <td>{{ $r['last'] }}</td>
                <td>{{ $r['buy'] }}</td>
                <td>{{ $r['sell'] }}</td>
                <td>{{ $r['remain'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
