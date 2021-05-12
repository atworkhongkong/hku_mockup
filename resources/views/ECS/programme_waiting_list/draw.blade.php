@extends('layouts.master')

@section('content')
    <style>
        .dim {
            color: #BCBCBC;
        }
    </style>
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/waiting_list">後補名單</a></li>
                    <li class="breadcrumb-item active" aria-current="page">抽籤</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-draw-count" class="form-label">中籤數</label>
                            <input type="text" class="form-control" id="input-draw-count" value="">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">抽籤</button>
                        </div>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        提示︰<br>
                        按「抽籤」後，會從未中籤的申請者當中進行抽籤。<br>
                        抽中後，中籤者的狀態會成為未報名。<br>
                        申請人確認報名，同事會把狀態轉為「已報名」<br>
                        若申請人放棄，同事會把狀態改為「取消」，輸入新的中籤數後再進行從未中籤者中進行另一次抽籤。
                    </div>

                    <hr class="my-4">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>後補人數</td>
                                <td>未中籤人數</td>
                                <td>已確認人數</td>
                                <td>待確認人數</td>
                                <td>取消人數</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>3</td>
                                <td>3</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr class="my-4">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">會員編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">姓別</th>
                                <th scope="col">聯絡電話</th>
                                <th scope="col">申請日期</th>
                                <th scope="col">中籤日期</th>
                                <th scope="col">狀況</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($draw as $k => $v)
                                <tr class="{{ $v['status'] == 'cancel' ? 'dim' : ''}}">
                                    <th>{{ $k }}</th>
                                    <td>{{ $v['member_code'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['gender'] }}</td>
                                    <td>{{ $v['phone'] }}</td>
                                    <td>{{ $v['apply_date'] }}</td>
                                    <td>{{ $v['lucky_date'] }}</td>
                                    <td>
                                        @if ($v['status'] != 'waiting')
                                            <select class="form-control">
                                                <option {{ $v['status'] == 'not_confirm' ? 'SELECTED' : '' }}>已報名</option>
                                                <option {{ $v['status'] == 'confirmed' ? 'SELECTED' : '' }}>未報名</option>
                                                <option {{ $v['status'] == 'cancel' ? 'SELECTED' : '' }}>取消</option>
                                            </select>
                                        @else
                                            未中籤
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row mb-2">
                        <div class="col-12">

                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
