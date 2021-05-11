@extends('layouts.master')

@section('top_script')
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
@endsection

@section('bottom_script')
    <script>
        /*
        $(function() {
           $('#input-programme-date').datepicker({
               uiLibrary: 'bootstrap4',
               format: 'yyyy-mm-dd',
               select: function (e, type) {
                   //return false;
               }
           });
        });
        */
    </script>
@endsection

@section('top_style')
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增活動</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">中心</label>
                            <select id="field-center" class="form-control mr-2">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-code" class="form-label">活動編號</label>
                            <input type="text" class="form-control" id="input-code">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-season" class="form-label">活動形式</label>
                            <select class="custom-select" aria-label="select example">
                                <option selected></option>
                                <option value="活動">活動</option>
                                <option value="小組">小組</option>
                                <option value="課程">課程</option>
                                <option value="購物">購物</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文名稱</label>
                            <input type="text" class="form-control" id="input-chi-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文名稱</label>
                            <input type="text" class="form-control" id="input-eng-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-location" class="form-label">地點</label>
                            <input type="text" class="form-control" id="input-location">
                        </div>
                    </div>

                    <div class="row">
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
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-quota" class="form-label">報名名額</label>
                            <input type="text" class="form-control" id="input-quota">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-volunteer-count" class="form-label">義工人數</label>
                            <input type="text" class="form-control" id="input-volunteer-count">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-min-age" class="form-label">最低年齡</label>
                            <input type="text" class="form-control" id="input-min-age">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">最高年齡</label>
                            <input type="text" class="form-control" id="input-eng-name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-content" class="form-label">內容</label>
                            <textarea class="form-control" id="input-content" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-start-date" class="form-label">開始日期</label>
                            <input type="date" class="form-control" id="input-start-date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-end-date" class="form-label">結束日期</label>
                            <input type="date" class="form-control" id="input-end-date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-reg-start-date" class="form-label">接受報名日期</label>
                            <input type="text" class="form-control" id="input-start-date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-reg-end-date" class="form-label">截止報名日期</label>
                            <input type="text" class="form-control" id="input-end-date">
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-12 mb-3">
                            <label for="input-programme-date" class="form-label">活動舉行日期</label>
                            <input type="text" class="form-control" id="input-programme-date" placeholder="2021-03-02,2021-03-15">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-total-lesson" class="form-label">總活動堂數</label>
                            <input type="text" class="form-control" id="input-total-lesson">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-target" class="form-label">活動對象</label>
                            <input type="text" class="form-control" id="input-target">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-staff" class="form-label">負責同事</label>
                            <input type="text" class="form-control" id="input-staff">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-register-type" class="form-label">報名形式</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="" selected></option>
                                <option value="first-in">先到先得</option>
                                <option value="draw">抽籤</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="input-identifier-code" class="form-label">社署指標編號 (最多四個)</label>
                            <input type="text" class="form-control" id="input-identifier-code">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" style="margin-top:32px;">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" style="margin-top:32px;">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" style="margin-top:32px;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="input-account-code" class="form-label">會計編號</label>
                            <input type="text" class="form-control" id="input-account-code">
                        </div>
                    </div>

                    <div class="row">
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
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-remark" class="form-label">備註</label>
                            <textarea class="form-control" id="input-remark" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-remark" class="form-label">狀態</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="0" SELECTED>未開始</option>
                                <option value="1">正常</option>
                                <option value="2">暫停</option>
                                <option value="3">取消</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="alert alert-primary mt-3" role="alert">
                提示︰<br>
                理論上新增活動有二種方法，第一種方法為直接在ECS系統新增活動，另一種方法為同事在另一系統輸入e-proposal後，已批核的record能直接射到ECS系統<br>
                新增活動時default status為未開始，直至活動轉為正常時才開始接受報名<br>
                活動編號的產生容後覆<br>
                輸入活動日期時，當揀選的日期是公眾假期時，最好有個提示。
            </div>
        </div>
    </div>
@endsection
