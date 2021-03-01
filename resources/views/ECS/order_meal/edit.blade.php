@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/ecs/order_meal">膳食預訂</a></li>
                    <li class="breadcrumb-item active"><a href="/ecs/order_meal?member_code=03EL30012">王妹</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $order_id }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <div class="row">
                    <div class="col-12 mb-3">
                        @if ($order_id == 1081)
                            收據編號︰<a href="/ecs/invoice/A0000025">A0000025</a>
                        @elseif ($order_id == 1082)
                            收據編號︰<a href="/ecs/invoice/A0000038">A0000038</a>
                        @endif
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col" class="text-center">2月8日 (一)</th>
                                        <th scope="col" class="text-center">2月9日 (二)</th>
                                        <th scope="col" class="text-center">2月10日 (三)</th>
                                        <th scope="col" class="text-center">2月11日 (四)</th>
                                        <th scope="col" class="holiday text-center">2月12日 (五)</th>
                                        <th scope="col" class="holiday text-center">2月13日 (六)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">早</th>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>雜菜肉絲炒米</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>金針雲耳肉片盅蒸飯</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>蛋治、麥皮</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>時菜水餸湯蕎麥麵</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                        <td class="holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">午</th>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 陳皮薑蔥蒸時鮮</option>
                                                <option>2. 金銀蛋碎肉扒時蔬</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 蒸魚</option>
                                                <option SELECTED>2. 菜遠牛肉</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炒菜心</option>
                                                <option SELECTED>2. 生炒骨</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 蒸水蛋</option>
                                                <option>2. 豬肉咸蛋</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                        <td class="text-center holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">晚</th>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 節瓜冬菇妏雞絲</option>
                                                <option>2. 三絲炒瀨粉</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 蒸魚</option>
                                                <option>2. 節瓜雞絲</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炒鱔片</option>
                                                <option SELECTED>2. 炆牛肉</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炆魚腩</option>
                                                <option SELECTED>2. 炒勝瓜</option>
                                                <option>執雞餐</option>
                                            </select>
                                        </td>
                                        <td class="text-center holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                        <td class="text-center holiday">
                                            <select class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        提示︰編輯飯餐時，若想取消某個飯餐，可在pull down menu選擇empty，再按更新<br>
                        當發現有飯餐取消，須要行refund flow
                    </div>

                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#cancel-modal">更 新</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">取消飯餐</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form target="_blank" action="/ecs/programme_register/cancel" method="GET" id="submit-form">
                        <input type="hidden" name="code" value="sae235S32vde23">
                        <div class="form-group">
                            <label for="cancel-breakfast-day">取消早餐 (1餐)</label>
                            <input type="text" class="form-control" id="cancel-breakfast-day" value="2021-02-11" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cancel-lunch-day">取消午餐 (1餐)</label>
                            <input type="text" class="form-control" id="cancel-lunch-day" value="2021-02-11" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cancel-dinner-day">取消晚餐 (1餐)</label>
                            <input type="text" class="form-control" id="cancel-dinner-day" value="2021-02-11" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cancel-breakfast-day">退還金額</label>
                            <input type="text" class="form-control" id="cancel-breakfast-day" value="22.0" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取 消</button>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('submit-form').submit();">退款及列印收據</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .holiday { background-color: #EFEFEF;}
    </style>
@endsection
