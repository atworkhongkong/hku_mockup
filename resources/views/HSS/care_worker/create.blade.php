@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/care_worker">照顧員</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增照顧員</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="input-username" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-username">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="input-address" class="form-label">地址</label>
                            <input type="text" class="form-control" id="input-address">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-first-date" class="form-label">入職日期</label>
                            <input type="date" class="form-control" id="input-first-date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-service-team" class="form-label">服務隊</label>
                            <select class="custom-select" aria-label="Default select example" id="input-service-team">
                                <option selected>請選擇服務隊</option>
                                <option value="IH12">IH12</option>
                                <option value="IH3">IH3</option>
                                <option value="TD">TD</option>
                                <option value="ES">ES</option>
                                <option value="HSMI">HSMI</option>
                                <option value="CCSV">CCSV</option>
                                <option value="IDSP">IDSP</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="input-remark" class="form-label">備註</label>
                            <input type="text" class="form-control" id="input-remark" value="" placeholder="怕狗">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $("#input-lend").change(function() {
            if ($(this).val() !== "") {
                $("#input-start-date").prop('disabled', false);
                $("#input-end-date").prop('disabled', false);
            } else {
                $("#input-start-date").prop('disabled', true);
                $("#input-end-date").prop('disabled', true);
            }
        })
    </script>
@endsection
