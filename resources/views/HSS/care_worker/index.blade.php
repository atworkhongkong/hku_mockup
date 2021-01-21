@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">照顧員</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/meal" method="GET">
                    <label class="sr-only" for="field-name" >姓名</label>
                    <input type="text" id="field-name" class="form-control mr-2" placeholder="姓名" />

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到 {{ count($care_workers) }} 筆記錄</span>
                    <a href="/hss/care_worker/create" class="btn btn-secondary">
                        新增照顧員
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%;">姓名</th>
                            <th scope="col" style="width:15%;">聯絡電話</th>
                            <th scope="col">住址</th>
                            <th scope="col">入職日期</th>
                            <th scope="col">服務隊</th>
                            <th scope="col" style="width:6%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($care_workers as $k => $cw)
                            <tr>
                                <td>{{ $cw }}</td>
                                <td>9{{ mt_rand(1000001, 9999999) }}</td>
                                <td>香港灣仔xxx道xx大廈x樓x室</td>
                                <td>{{ mt_rand(1998, 2020) }}-{{ mt_rand(10, 12) }}-{{ mt_rand(10, 31) }}</td>
                                <td>IH12</td>
                                <td>
                                    <a href="/hss/care_worker/edit/{{ $k + 1 }}"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
