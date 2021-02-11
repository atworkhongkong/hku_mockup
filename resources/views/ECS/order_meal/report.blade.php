@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">每週膳食統計報告</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/order_meal" method="GET">
                    <label class="sr-only" for="field-area">搜尋範圍</label>
                    <select id="field-area" class="form-control mr-2" name="team">
                        <option value="">所有會員</option>
                        <option value="" SELECTED>長者會員</option>
                        <option value="">長者會員(綜援)</option>
                        <option value="">驕陽會員</option>
                        <option value="">中心職員</option>
                    </select>

                    <label class="sr-only" for="field-key-word" >關錄字</label>
                    <input type="week" class="form-control mr-2" id="input-week" value="2021-W06"">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到7筆紀錄</span>
                    </div>
                    <table class="table table-sm table-striped table-bordered" style="font-size:.9rem;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width:5%;">組別</th>
                                <th scope="col">姓名</th>
                                <th scope="col">會員編號</th>
                                <th scope="col" colspan="5">8/2 (一)</th>
                                <th scope="col" colspan="5">9/2 (二)</th>
                                <th scope="col" colspan="5">10/2 (三)</th>
                                <th scope="col" colspan="5">11/2 (四)</th>
                                <th scope="col" colspan="5">12/2 (五)</th>
                                <th scope="col" colspan="5">13/2 (六)</th>
                                <th scope="col" >總數</th>
                                <th scope="col">收費</th>
                                <th scope="col" colspan="5">收據編號</th>
                            </tr>
                            <tr class="text-center">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td>早</td><td>午</td><td>午</td><td>晚</td><td>晚</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="text-center">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td><td>1</td><td>2</td><td>1</td><td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>王妹</td>
                                <td><a href="/ecs/order_meal?member_code=03EL30012" target="_blank">03EL30012</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>6</td>
                                <td>$102.0</td>
                                <td><a href="/ecs/invoice/A0000038" target="_blank">A0000038</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>王妹</td>
                                <td><a href="/ecs/order_meal?member_code=03EL30012" target="_blank">03EL30012</a></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>6</td>
                                <td>$102.0</td>
                                <td><a href="/ecs/invoice/A0000025" target="_blank">A0000025</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>陳裘大</td>
                                <td><a href="/ecs/order_meal?member_code=03EL10082" target="_blank">03EL10082</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>6</td>
                                <td>$102.0</td>
                                <td><a href="/ecs/invoice/A0000038" target="_blank">A0000082</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>李思鏵</td>
                                <td><a href="/ecs/order_meal?member_code=03EL10159" target="_blank">03EL10159</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>9</td>
                                <td>$132.0</td>
                                <td><a href="/ecs/invoice/A0000038" target="_blank">A0000081</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>黃天能</td>
                                <td><a href="/ecs/order_meal?member_code=03EL10181" target="_blank">03EL10181</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>12</td>
                                <td>$132.0</td>
                                <td><a href="/ecs/invoice/A0000184" target="_blank">A0000184</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>張展鶻</td>
                                <td><a href="/ecs/order_meal?member_code=03EL10353" target="_blank">03EL10353</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td>&#8226;</td><td>&#8226;</td><td></td><td>&#8226;</td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>12</td>
                                <td>$132.0</td>
                                <td><a href="/ecs/invoice/A0000188" target="_blank">A0000188</a></td>
                            </tr>
                            <tr class="text-center">
                                <td>EL</td>
                                <td>魯訊</td>
                                <td><a href="/ecs/order_meal?member_code=03EL10802" target="_blank">03EL10802</a></td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td>&#8226;</td><td></td><td>&#8226;</td><td></td><td>&#8226;</td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td></td><td></td><td></td><td></td><td></td>
                                <td>6</td>
                                <td>$102.0</td>
                                <td><a href="/ecs/invoice/A0000582" target="_blank">A0000582</a></td>
                            </tr>
                            <tr class="text-center">
                                <td></td>
                                <td></td>
                                <td>總數</td>
                                <td>6</td><td>0</td><td>6</td><td>0</td><td>6</td>
                                <td>5</td><td>0</td><td>5</td><td>0</td><td>5</td>
                                <td>5</td><td>3</td><td>2</td><td>3</td><td>2</td>
                                <td>3</td><td>3</td><td>0</td><td>3</td><td>0</td>
                                <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                <td>57</td>
                                <td>$763.0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
