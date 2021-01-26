@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">膳食</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/meal" method="GET">
                    <label class="sr-only" for="field-name" >姓名</label>
                    <input type="text" id="field-name" class="form-control mr-2" placeholder="姓名" />
                    <!--
                    <datalist id="name-list">
                        <option value="陳娣">
                        <option value="陳金妹">
                        <option value="朱偉明">
                        <option value="羅鵬">
                        <option value="黃金蓮">
                    </datalist>
                    -->

                    <label class="sr-only" for="field-service-team">服務隊</label>
                    <select id="field-service-team" class="form-control mr-2" name="team">
                        <option value="">服務隊</option>
                        <option value="IH12" SELECTED>IH12</option>
                        <option value="IH3">IH3</option>
                        <option value="TD">TD</option>
                        <option value="ES">ES</option>
                        <option value="HSMI">HSMI</option>
                        <option value="CCSV">CCSV</option>
                        <option value="IDSP">IDSP</option>
                    </select>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到2筆記錄</span>
                    <a href="/hss/meal/create" class="btn btn-secondary">
                        新增膳食會員
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%;">姓名</th>
                            <th scope="col" style="width:15%;">檔案編號</th>
                            <th scope="col">服務隊</th>
                            <th scope="col">地址</th>
                            <th scope="col" style="width:6%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>陳娣</td>
                            <td>104/301</td>
                            <td>IH12</td>
                            <td>石排灣村碧朗樓x樓x室</td>
                            <td>
                                <a href="/hss/meal/edit"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>徐彥德</td>
                            <td>100/302</td>
                            <td>IH12</td>
                            <td>香港仔中心x座x樓x室</td>
                            <td>
                                <a href="/hss/meal/edit"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
