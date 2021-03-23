<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>社交支援系統</span>
            </div>
            <div class="p-3">
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
                                @for ($k = 0 ; $k <= 2 ; $k++)
                                    <tr>
                                        <td style="text-align:left;">{{ $k + 1 }}. {{ $section8[$k] }}</td>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <td>
                                                <input class="form-check-input" type="radio" name="section8_{{ $k + 1 }}">
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
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
                                @for ($k = 3 ; $k <= 4 ; $k++)
                                    <tr>
                                        <td style="text-align:left;">{{ $k + 1 }}. {{ $section8[$k] }}</td>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <td>
                                                <input class="form-check-input" type="radio" name="section8_{{ $k + 1 }}">
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
            </div>
        </div>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>心理方面</span>
            </div>
            <div class="p-3">
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
                                @for ($k = 0 ; $k <= 2 ; $k++)
                                    <tr>
                                        <td style="text-align:left;">{{ $k + 1 }}. {{ $section9[$k] }}</td>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <td>
                                                <input class="form-check-input" type="radio" name="section8_{{ $k + 1 }}">
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-right" style="font-size:10px;">剔選「不覺得」可得一分，「頗不覺得」可得二分，餘此類推。</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:50%;">&nbsp;</th>
                                    <th scope="col" style="width:108px;">不覺得</th>
                                    <th scope="col" style="width:108px;">頗不覺得</th>
                                    <th scope="col" style="width:108px;">一般</th>
                                    <th scope="col" style="width:108px;">頗覺得</th>
                                    <th scope="col" style="width:108px;">很覺得</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($k = 3 ; $k <= 4 ; $k++)
                                    <tr>
                                        <td style="text-align:left;">{{ $k + 1 }}. {{ $section8[$k] }}</td>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <td>
                                                <input class="form-check-input" type="radio" name="section9_{{ $k + 1 }}">
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-right" style="font-size:10px;">剔選「不接受」可得一分，「頗不接受」可得二分，餘此類推。</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:50%;">&nbsp;</th>
                                    <th scope="col" style="width:108px;">不接受</th>
                                    <th scope="col" style="width:108px;">頗不接受</th>
                                    <th scope="col" style="width:108px;">一般</th>
                                    <th scope="col" style="width:108px;">頗接受</th>
                                    <th scope="col" style="width:108px;">很接受</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($k = 5 ; $k <= 5 ; $k++)
                                    <tr>
                                        <td style="text-align:left;">{{ $k + 1 }}. {{ $section9[$k] }}</td>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <td>
                                                <input class="form-check-input" type="radio" name="section9_{{ $k + 1 }}">
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
