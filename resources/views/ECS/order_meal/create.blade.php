@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/order_meal">膳食預訂</a></li>
                    <li class="breadcrumb-item active" aria-current="page">預訂</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="field-memberships">會員類别</label>
                            <select class="form-control" id="field-memberships">
                                <option></option>
                                <option>長者會員</option>
                                <option>長者會員 (綜援)</option>
                                <option>驕陽會員</option>
                                <option>中心職員</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="input-member-code" class="form-label">會員編號</label>
                            <input type="text" class="form-control" id="input-member-code" value="{{ $member_code }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="input-staff-name" class="form-label">職員姓名</label>
                            <input type="text" class="form-control" id="input-staff-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="input-week" class="form-label">週份</label>
                            <input type="week" class="form-control" id="input-week" value="2021-W08"">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col" class="text-center">2月22日 (一)</th>
                                        <th scope="col" class="text-center">2月23日 (二)</th>
                                        <th scope="col" class="text-center">2月24日 (三)</th>
                                        <th scope="col" class="text-center">2月25日 (四)</th>
                                        <th scope="col" class="text-center">2月26日 (五)</th>
                                        <th scope="col" class="text-center">2月27日 (六)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">早</th>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>雜菜肉絲炒米</option>
                                                <option>蕎麥麵</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>金針雲耳肉片盅蒸飯</option>
                                                <option>蛋治、麥皮</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>蛋治、麥皮</option>
                                                <option>金針雲耳肉片盅蒸飯</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>時菜水餸湯蕎麥麵</option>
                                                <option>肉絲炒米</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>盅蒸飯</option>
                                                <option>肉絲炒米</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>雜菜</option>
                                                <option>蛋治、麥皮</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">午</th>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 陳皮薑蔥蒸時鮮</option>
                                                <option>2. 金銀蛋碎肉扒時蔬</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 蒸魚</option>
                                                <option>2. 菜遠牛肉</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 炒菜心</option>
                                                <option>2. 生炒骨</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 生炒骨</option>
                                                <option>2. 蒸魚</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 炒飯</option>
                                                <option>2. 蒸魚</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 蒸時鮮</option>
                                                <option>2. 扒時蔬</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">晚</th>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 節瓜冬菇妏雞絲</option>
                                                <option>2. 三絲炒瀨粉</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 炒鱔片</option>
                                                <option>2. 炆牛肉</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 炆魚腩</option>
                                                <option>2. 炒勝瓜</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 節瓜冬菇</option>
                                                <option>2. 炒勝瓜</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 節瓜冬菇</option>
                                                <option>2. 炒勝瓜</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control">
                                                <option value=""></option>
                                                <option>1. 節瓜冬菇</option>
                                                <option>2. 炒勝瓜</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">預訂及列印收據</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .holiday { background-color: #EFEFEF;}
    </style>
@endsection
