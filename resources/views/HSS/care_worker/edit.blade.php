@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/care_worker">照顧員</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="input-username" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="input-username" value="{{ $name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone" value="9{{ mt_rand(1000001, 9999999) }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="input-address" class="form-label">地址</label>
                            <input type="text" class="form-control" id="input-address" value="香港灣仔xxx道xx大廈x樓x室">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-first-date" class="form-label">入職日期</label>
                            <input type="email" class="form-control" id="input-first-date" value="{{ mt_rand(1998, 2020) }}-{{ mt_rand(10, 12) }}-{{ mt_rand(10, 31) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-service-team" class="form-label">服務隊</label>
                            <select class="custom-select" aria-label="Default select example" id="input-service-team">
                                <option selected>請選擇服務隊</option>
                                <option value="IH12" SELECTED>IH12</option>
                                <option value="IH3">IH3</option>
                                <option value="TD">TD</option>
                                <option value="ES">ES</option>
                                <option value="HSMI">HSMI</option>
                                <option value="CCSV">CCSV</option>
                                <option value="IDSP">IDSP</option>
                            </select>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row g-3">
                        <div class="col-4 mb-3">
                            <label for="lend" class="form-label">借用至其他服務隊</label>
                            <select class="custom-select" aria-label="Default select example" id="input-lend">
                                <option value="" selected>請選擇服務隊</option>
                                <option value="IH12" DISABLED>IH12</option>
                                <option value="IH3">IH3</option>
                                <option value="TD">TD</option>
                                <option value="ES">ES</option>
                                <option value="HSMI">HSMI</option>
                                <option value="CCSV">CCSV</option>
                                <option value="IDSP">IDSP</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="input-start-date" class="form-label">借用日期由</label>
                            <input type="date" class="form-control" id="input-start-date" value="" disabled>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="input-end-date" class="form-label">借用日期至</label>
                            <input type="date" class="form-control" id="input-end-date" value="" disabled>
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
