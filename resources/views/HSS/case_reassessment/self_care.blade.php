<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>自我照顧能力 (IADL) (可以問使用者或家人，或由工作員觀察)</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12">
                        <p class="text-right" style="font-size:10px;">完全獨立 - 0分, 部份協助 - 1分, 完全協助 - 2分, 別人代完成 - 3分, 沒有發生 - 8分</p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50%;">&nbsp;</th>
                                <th scope="col" style="width:108px;">完全獨立</th>
                                <th scope="col" style="width:108px;">部份協助</th>
                                <th scope="col" style="width:108px;">完全協助</th>
                                <th scope="col" style="width:108px;">別人代完成</th>
                                <th scope="col" style="width:108px;">沒有發生</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($question_no = 1 ; $question_no <= 8 ; $question_no++)
                                <tr>
                                    <td style="text-align:left;">{{ $options[4][$question_no] }}</td>
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
            </div>
        </div>


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>日常生活情況 (ADL) (可以問使用者或家人，或由工作員觀察)</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12">
                        <p class="text-right" style="font-size:10px;">完全獨立 - 0分, 部份協助 - 1分, 完全協助 - 2分, 別人代完成 - 3分, 沒有發生 - 8分</p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50%;">&nbsp;</th>
                                <th scope="col" style="width:108px;">完全獨立</th>
                                <th scope="col" style="width:108px;">部份協助</th>
                                <th scope="col" style="width:108px;">完全協助</th>
                                <th scope="col" style="width:108px;">別人代完成</th>
                                <th scope="col" style="width:108px;">沒有發生</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($question_no = 1 ; $question_no <= 10 ; $question_no++)
                                <tr>
                                    <td style="text-align:left;">{{ $options[5][$question_no] }}</td>
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
