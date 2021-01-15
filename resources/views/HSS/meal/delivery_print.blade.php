@extends('layouts.master')

@section('content')
<div class="container">
    <div class="content__wrapper">
        @for ($i = 1 ; $i <= 5 ; $i++)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">姓名</th>
                    <th scope="col">地址</th>
                    <th scope="col">送出</th>
                    <th scope="col">不遇</th>
                    <th scope="col">時段</th>
                    <th scope="col">備註</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>32</td>
                    <td>*水霞</td>
                    <td>雙*18樓C<br>(102/206)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>上</td>
                    <td>收費$836 / 多飯</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>*水妹</td>
                    <td>珊*32樓9室<br>(802/213)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>全</td>
                    <td>收費$703 / 少飯、戒有骨魚</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>*帶金</td>
                    <td>珊*32樓9室<br>(802/105)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>全</td>
                    <td>收費$380 / 少肉</td>
                </tr>
                <tr>
                    <td>260</td>
                    <td>*帶銀</td>
                    <td>珊*12樓A室<br>(702/128)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>上</td>
                    <td>淋飯/剪碎餸菜</td>
                </tr>
                <tr>
                    <td>305</td>
                    <td>*帶銅</td>
                    <td>湖*20樓C室<br>(810/300)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>上</td>
                    <td>紅色門</td>
                </tr>
                <tr>
                    <td>941</td>
                    <td>*佳麗</td>
                    <td>珊*8樓B室<br>(801/902)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>上</td>
                    <td>收費$325</td>
                </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                <tr>
                    <td class="text-right border-top-0">工作員姓名︰</td>
                    <td style="width:40%;" class="border-bottom border-top-0">&nbsp;</td>
                    <td class="text-right border-top-0">日期︰</td>
                    <td class="border-bottom border-top-0">2021-01-21 AM</td>
                </tr>
                <tr>
                    <td class="text-right border-top-0">送飯時間︰首位派發</td>
                    <td style="width:40%;" class="border-bottom border-top-0">&nbsp;</td>
                    <td class="text-right border-top-0">最後一位派發</td>
                    <td class="border-bottom border-top-0"></td>
                </tr>
                </tbody>
            </table>
        @endfor
    </div>

</div>
@endsection
