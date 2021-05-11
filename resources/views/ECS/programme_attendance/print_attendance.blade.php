@extends('layouts.no_header')

@section('content')
    <div class="container my-5">
        <div class="content__wrapper">
            <h5 class="text-center">出席記錄</h5>
            <div class="row my-4">
                <div class="col-auto">
                    活動名稱
                </div>
                <div class="col-md-5 border-bottom">

                </div>
                <div class="col-auto">
                    活動編號
                </div>
                <div class="col-md-5 border-bottom">

                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    導師
                </div>
                <div class="col border-bottom">

                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    日期
                </div>
                <div class="col border-bottom">

                </div>
            </div>

            <div class="row my-4">
                <div class="col-auto">
                    出席人數
                </div>
                <div class="col border-bottom">

                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-12 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">姓名</th>
                                <th scope="col">性別</th>
                                <th scope="col">年齡</th>
                                <th scope="col">出席/缺席</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 1 ; $i <= 12 ; $i++)
                                <?php
                                    $gender = Arr::random(['M', 'F']);
                                    $age = rand(60,80);
                                ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>xxx</td>
                                    <td>{{ $gender }}</td>
                                    <td>{{ $age }}</td>
                                    <td>&nbsp;</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
