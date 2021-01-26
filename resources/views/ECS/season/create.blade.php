@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">課程</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增課程</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="input-season" class="form-label">季度</label>
                        <input type="text" class="form-control" id="input-season">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-code" class="form-label">活動編號</label>
                        <input type="text" class="form-control" id="input-code">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-chi-name" class="form-label">中文名稱</label>
                        <input type="text" class="form-control" id="input-chi-name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">英文名稱</label>
                        <input type="text" class="form-control" id="input-eng-name">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-content" class="form-label">內容</label>
                        <textarea class="form-control" id="input-content" rows="4"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-date" class="form-label">日期</label>
                        <input type="text" class="form-control" id="input-date" placeholder="20/1 - 10/2 (逢星期三，共4節)">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-time" class="form-label">時間</label>
                        <input type="text" class="form-control" id="input-time" placeholder="6:00p.m. - 7:30p.m.">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-location" class="form-label">地點</label>
                        <input type="text" class="form-control" id="input-location">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-location" class="form-label">費用</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">長者會員</th>
                                    <th scope="col">長者會員(綜援)</th>
                                    <th scope="col">驕陽會員</th>
                                    <th scope="col">護老者</th>
                                    <th scope="col">義工</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-control" type="text" placeholder="100" aria-label="input-price-1"></td>
                                    <td><input class="form-control" type="text" placeholder="80" aria-label="input-price-2"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-3"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-4"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-5"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-remark" class="form-label">備註</label>
                        <textarea class="form-control" id="input-remark" rows="4"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-target" class="form-label">對象</label>
                        <input type="text" class="form-control" id="input-target">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-staff" class="form-label">負責職員</label>
                        <input type="text" class="form-control" id="input-staff">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
