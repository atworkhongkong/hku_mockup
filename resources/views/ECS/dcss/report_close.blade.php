<div class="container" style="width:90%;">
    <div class="contain__wrapper">
        <div class="row">
            <div class="col-12 mb-3">
                <table class="table table-bordered" style="font-size:.9rem;">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Month</th>
                            @foreach($close_reasons as $cr)
                                <th scope="col">{{ $cr }}</th>
                            @endforeach
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $month => $row)
                            <tr class="text-center">
                                <td>{{ $month }}</td>
                                @foreach($row as $d)
                                    <td>{{ $d }}
                                @endforeach
                            </tr>
                        @endforeach
                        <tr class="text-center">
                            <td colspan="8">Year-end Total:</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


