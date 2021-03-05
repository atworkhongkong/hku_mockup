@extends('layouts.no_header')

@section('content')
    <div class="container my-5">
        <div class="content__wrapper">
            <div class="row my-4">
                <div class="col-auto">
                    活動名稱
                </div>
                <div class="col border-bottom">

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
                                <th scope="col">出席/缺席</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 1 ; $i <= 12 ; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>xxx</td>
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
