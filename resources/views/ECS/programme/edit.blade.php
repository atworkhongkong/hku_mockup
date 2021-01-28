@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item active" aria-current="page">親子天地</li>
                </ol>
            </nav>

            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="input-code" class="form-label">活動編號</label>
                        <input type="text" class="form-control" id="input-code" value="JM30130">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-season" class="form-label">活動形式</label>
                        <select class="custom-select" aria-label="select example">
                            <option selected></option>
                            <option value="活動" SELECTED>活動</option>
                            <option value="小組">小組</option>
                            <option value="課程">課程</option>
                            <option value="購物">購物</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-chi-name" class="form-label">中文名稱</label>
                        <input type="text" class="form-control" id="input-chi-name" value="親子天地">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">英文名稱</label>
                        <input type="text" class="form-control" id="input-eng-name" value="Family Activity">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-location" class="form-label">地點</label>
                        <input type="text" class="form-control" id="input-location" value="香港仔大道 180 號 B 204室">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-indoor-outdoor" class="form-label">活動場地</label>
                        <select class="custom-select" aria-label="select example">
                            <option value="indoor" selected>室內</option>
                            <option value="outdoor">室外</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-monthly-non-monthly" class="form-label">活動性質</label>
                        <select class="custom-select" aria-label="select example">
                            <option value="monthly_fee" selected>月費活動</option>
                            <option value="non_monthly_fee">非月費活動</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-quota" class="form-label">報名名額</label>
                        <input type="text" class="form-control" id="input-quota" value="20">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-volunteer-count" class="form-label">義工人數</label>
                        <input type="text" class="form-control" id="input-volunteer-count" value="0">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-min-age" class="form-label">最低年齡</label>
                        <input type="text" class="form-control" id="input-min-age" value="60">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-eng-name" class="form-label">最高年齡</label>
                        <input type="text" class="form-control" id="input-eng-name">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-content" class="form-label">內容</label>
                        <textarea class="form-control" id="input-content" rows="4"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-start-date" class="form-label">開始日期</label>
                        <input type="text" class="form-control" id="input-start-date" value="2021-03-01">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-end-date" class="form-label">結束日期</label>
                        <input type="text" class="form-control" id="input-end-date" value="2021-03-01">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-reg-start-date" class="form-label">接受報名日期</label>
                        <input type="text" class="form-control" id="input-start-date" value="2021-01-01">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-reg-end-date" class="form-label">截止報名日期</label>
                        <input type="text" class="form-control" id="input-end-date" value="2021-01-31">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-total-lesson" class="form-label">總活動堂數</label>
                        <input type="text" class="form-control" id="input-total-lesson" value="1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-staff" class="form-label">負責同事</label>
                        <input type="text" class="form-control" id="input-staff" value="同事A">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="input-target" class="form-label">活動對象</label>
                        <input type="text" class="form-control" id="input-target" value="60歲以上長者">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-target-desc" class="form-label">對象描述</label>
                        <input type="text" class="form-control" id="input-target-desc">
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
                                    <th scope="col">非會員</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-control" type="text" placeholder="100" aria-label="input-price-1"></td>
                                    <td><input class="form-control" type="text" placeholder="80" aria-label="input-price-2"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-3"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-4"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-5"></td>
                                    <td><input class="form-control" type="text" placeholder="" aria-label="input-price-6"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-remark" class="form-label">備註</label>
                        <textarea class="form-control" id="input-remark" rows="4"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="input-remark" class="form-label">狀態</label>
                        <select class="custom-select" aria-label="select example">
                            <option></option>
                            <option value="1" SELECTED>正常</option>
                            <option value="2">暫停</option>
                            <option value="3">取消</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                        <button type="button" class="btn btn-danger">覆 製</button>
                        <button type="button" class="btn btn-danger">刪 除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
