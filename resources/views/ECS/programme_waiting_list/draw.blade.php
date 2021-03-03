@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/edit/2">JM30130 - 親子天地</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme_waiting_list/2">後補名單</a></li>
                    <li class="breadcrumb-item active" aria-current="page">抽籤</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-draw-count" class="form-label">中籤數</label>
                            <input type="text" class="form-control" id="input-draw-count" value="8">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="input-draw-date" class="form-label">上次抽籤日期</label>
                            <input type="text" class="form-control" id="input-draw-date" value="2020-01-08" readonly>
                        </div>
                    </div>

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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>03EL300102</td>
                                <td>陳永仁</td>
                                <td>男</td>
                                <td>98989898</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>男</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>男</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>男</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr style="color:#ABABAB;">
                                <th scope="row">9</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>男</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr style="color:#ABABAB;">
                                <th scope="row">10</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr style="color:#ABABAB;">
                                <th scope="row">11</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>男</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                            <tr style="color:#ABABAB;">
                                <th scope="row">12</th>
                                <td>03EL3001xx</td>
                                <td>xxx</td>
                                <td>女</td>
                                <td>xxxxxxxx</td>
                                <td>2021-01-05</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">重新抽籤</button>
                            <button type="submit" class="btn btn-primary">確認抽籤</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
