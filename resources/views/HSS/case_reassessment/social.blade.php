<div class="form-container">
    <form>
        <div class="row">
            <div class="col-12">
                <p class="text-right" style="font-size:10px;">剔選「沒有」可得一分，「頗少」可得二分，餘此類推。</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width:50%;">&nbsp;</th>
                            <th scope="col" style="width:108px;">沒有</th>
                            <th scope="col" style="width:108px;">頗少</th>
                            <th scope="col" style="width:108px;">一般</th>
                            <th scope="col" style="width:108px;">頗多</th>
                            <th scope="col" style="width:108px;">很多</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($question_no = 1 ; $question_no <= 3 ; $question_no++)
                            <tr>
                                <td style="text-align:left;">{{ $question_no }}. {{ $options[2][$question_no] }}</td>
                                @for($i = 1 ; $i <= 5 ; $i++)
                                    <td>
                                        <input class="form-check-input" type="radio" name="radio_{{ $question_no }}">
                                    </td>
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-12">
                <p class="text-right" style="font-size:10px;">剔選「不能」可得一分，「頗少」可得二分，餘此類推。</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width:50%;">&nbsp;</th>
                            <th scope="col" style="width:108px;">不能</th>
                            <th scope="col" style="width:108px;">頗少</th>
                            <th scope="col" style="width:108px;">一般</th>
                            <th scope="col" style="width:108px;">頗多</th>
                            <th scope="col" style="width:108px;">很能夠</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($question_no = 4 ; $question_no <= 5 ; $question_no++)
                            <tr>
                                <td style="text-align:left;">{{ $question_no }}. {{ $options[2][$question_no] }}</td>
                                @for($i = 1 ; $i <= 5 ; $i++)
                                    <td>
                                        <input class="form-check-input" type="radio" name="radio_{{ $question_no }}">
                                    </td>
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <div class="form-group row">
            <label for="total-mark" class="col-sm-1 col-form-label text-center">總分</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="total-mark" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>

@section('top_style')
    <style>
        tbody td input[type="radio"] {
            margin-left: 7px;
        }
    </style>
@endsection
