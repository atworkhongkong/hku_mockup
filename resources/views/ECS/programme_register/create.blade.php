@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme_register">活動報名</a></li>
                    <li class="breadcrumb-item active" aria-current="page">單人報名</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/programme" method="GET">
                    <label class="sr-only" for="field-member-code" >會員編號</label>
                    <input type="text" id="field-member-code" class="form-control mr-2" placeholder="會員編號" value="03EL310036"/>

                    <button type="submit" class="btn btn-primary">搜尋會員</button>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-chi-name" class="form-label">中文姓名</label>
                    <input type="text" class="form-control" id="input-chi-name" value="陳二妹" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-eng-name" class="form-label">英文姓名</label>
                    <input type="text" class="form-control" id="input-eng-name" value="Chan Yee Mui" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-chi-name" class="form-label">姓別</label>
                    <select class="custom-select" aria-label="Disabled select example" disabled>
                        <option></option>
                        <option value="1">男</option>
                        <option value="2" SELECTED>女</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-eng-name" class="form-label">出生日期</label>
                    <input type="text" class="form-control" id="input-eng-name" value="1938-12-08" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-address" class="form-label">地址</label>
                    <input type="text" class="form-control" id="input-address" value="香港仔中心x座x樓2室" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-phone" class="form-label">住宅電話</label>
                    <input type="text" class="form-control" id="input-phone" value="21122112" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-mobile" class="form-label">手提電話</label>
                    <input type="text" class="form-control" id="input-mobile" value="98989898" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-member-type" class="form-label">會員類別</label>
                    <input type="text" class="form-control" id="input-member-type" value="長者會員(綜援)" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-expiry-date" class="form-label">會員到期日</label>
                    <input type="text" class="form-control" id="input-expiry-date" value="2013-05-31" readonly>
                </div>
            </div>

            <hr class="my-5">

            <div class="form-container">
                <form>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>活動</span>
                            <span>
                                <input type="text" class="form-control" list="programme-list" placeholder="搜尋活動" />
                                <datalist id="programme-list">
                                      <option value="JM30130 親子天地">
                                      <option value="JM30129 粵曲欣賞">
                                </datalist>
                            </span>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">活動編號</th>
                                    <th scope="col">名稱</th>
                                    <th scope="col">收費</th>
                                    <th scope="col">折扣</th>
                                    <th scope="col">剩餘名額</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" value="JM30130" readonly></td>
                                    <td><input type="text" class="form-control" value="親子活動" readonly></td>
                                    <td>
                                        <select class="custom-select" aria-label="Default select example">
                                            <option value="1">長者會員 - $100.0</option>
                                            <option value="2" SELECTED>長者會員(綜援) - $80.0</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" value="" placeholder="0">
                                    </td>
                                    <td>18</td>
                                    <td>
                                        <a href="/ecs/programme/edit" target="_blank"><i class="far fa-info-circle"></i></a>
                                        <i class="far fa-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" value="JM30129" readonly></td>
                                    <td><input type="text" class="form-control" value="粵曲欣賞" readonly></td>
                                    <td>
                                        <select class="custom-select" aria-label="Default select example">
                                            <option value="1">長者會員 - $100.0</option>
                                            <option value="2" SELECTED>長者會員(綜援) - $80.0</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" value="" placeholder="0">
                                    </td>
                                    <td>17</td>
                                    <td>
                                        <a href="/ecs/programme/edit" target="_blank"><i class="far fa-info-circle"></i></a>
                                        <i class="far fa-trash"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>優惠劵</span>
                            <span>
                                <input type="text" class="form-control" list="coupon-list" placeholder="搜尋優惠劵" />
                                <datalist id="coupon-list">
                                      <option value="NY2020 $20.0 優惠">
                                      <option value="NY2022 -$20.0 優惠">
                                </datalist>
                            </span>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">優惠劵代號</th>
                                    <th scope="col">折扣</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-control" type="text" value="NY2021" readonly></td>
                                        <td><input class="form-control" type="text" value="20" readonly></td>
                                        <td><i class="far fa-trash"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>付款金額</span>
                        </div>
                        <div class="p-3">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <select class="custom-select" aria-label="Default select example">
                                        <option selected>請選擇付款方式</option>
                                        <option value="cash">現金</option>
                                        <option value="cheque">支票</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="sr-only" for="field-total-price">金額</label>
                                    <input type="text" id="field-total-price" class="form-control mr-2" value="140" readonly />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
