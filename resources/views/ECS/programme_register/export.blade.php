@extends('layouts.no_header')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <div class="alert alert-primary" role="alert">
                提示︰此頁應export為Excel，此mock up以html來顯示。
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    活動名稱
                </div>
                <div class="col-5 border-bottom">
                    xxx
                </div>
                <div class="col text-right">
                    活動編號
                </div>
                <div class="col-5 border-bottom">
                    xxx
                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    舉行日期
                </div>
                <div class="col-5 border-bottom">
                    xxx
                </div>
                <div class="col text-right">
                    堂數
                </div>
                <div class="col-5 border-bottom">
                    x
                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    地點
                </div>
                <div class="col-5 border-bottom">
                    xxx
                </div>
                <div class="col text-right">
                    導師
                </div>
                <div class="col-5 border-bottom">
                    x
                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    參加人數
                </div>
                <div class="col-5 border-bottom">
                    3
                </div>
            </div>


            <div class="row">
                <div class="col-12 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">收據編號</th>
                                <th scope="col" style="width:15%;">會員編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">手提電話</th>
                                <th scope="col">報名日期</th>
                                <th scope="col">狀態</th>
                                <th scope="col">付款方法</th>
                                <th scope="col">優惠</th>
                                <th scope="col">金額</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/ecs/invoice/A0000012" target="_blank">A0000012</a></td>
                                <td>03EL300102</td>
                                <td>陳永仁</td>
                                <td>98989898</td>
                                <td>2021-01-05</td>
                                <td>有效</td>
                                <td>現金</td>
                                <td></td>
                                <td>$100.0</td>
                            </tr>
                            <tr>
                                <td><a href="/ecs/invoice/A0000011" target="_blank">A0000011</a></td>
                                <td>03ELS300805</td>
                                <td>劉健明</td>
                                <td>96969696</td>
                                <td>2021-01-04</td>
                                <td>有效</td>
                                <td>現金</td>
                                <td>$20<br>(優惠劵)</td>
                                <td>$80.0</td>
                            </tr>
                            <tr>
                                <td><a href="/ecs/invoice/A0000010" target="_blank">A0000010</a></td>
                                <td>03ELS300805</td>
                                <td>葉問</td>
                                <td>95959595</td>
                                <td>2021-01-04</td>
                                <td>已取消</td>
                                <td>現金</td>
                                <td></td>
                                <td>($100.0)</td>
                            </tr>
                            <tr>
                                <td colspan="8" class="text-right">總收入︰</td>
                                <td>$180.0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
