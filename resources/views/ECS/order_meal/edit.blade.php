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
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>金針雲耳肉片盅蒸飯</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>蛋治、麥皮</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>時菜水餸湯蕎麥麵</option>
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
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 蒸魚</option>
                                                <option SELECTED>2. 菜遠牛肉</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炒菜心</option>
                                                <option SELECTED>2. 生炒骨</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 蒸水蛋</option>
                                                <option>2. 豬肉咸蛋</option>
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
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option SELECTED>1. 蒸魚</option>
                                                <option>2. 節瓜雞絲</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1081 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炒鱔片</option>
                                                <option SELECTED>2. 炆牛肉</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" {{ $order_id == 1082 ? '' : 'disabled' }}>
                                                <option value=""></option>
                                                <option>1. 炆魚腩</option>
                                                <option SELECTED>2. 炒勝瓜</option>
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

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .holiday { background-color: #EFEFEF;}
    </style>
@endsection
