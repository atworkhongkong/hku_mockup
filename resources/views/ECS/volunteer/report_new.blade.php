<div class="row">
    <div class="col-12 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <span>找到{{ count($report) }}筆記錄</span>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" rowspan="2">月份</th>
                <th scope="col" colspan="2" class="text-center">STE</th>
                <th scope="col" colspan="2" class="text-center">Non-STE</th>
                <th scope="col" rowspan="2">總人數</th>
            </tr>
            <tr>
                <td>人數(60歲以下)</td>
                <td>人數(60歲或以上)</td>
                <td>人數(60歲以下)</td>
                <td>人數(60歲或以上)</td>
            </tr>
            </thead>
            <tbody>
            @foreach($report as $r)
                <tr>
                    <td>{{ $r['month'] }}</td>
                    <td>{{ $r['ste_below'] }}</td>
                    <td>{{ $r['ste_above'] }}</td>
                    <td>{{ $r['non_ste_below'] }}</td>
                    <td>{{ $r['non_ste_above'] }}</td>
                    <td>{{ $r['total'] }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" class="text-right">年度總人數</td>
                <td>23</td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-primary">匯出</button>
    </div>
</div>
