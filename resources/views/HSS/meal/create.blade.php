@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <div class="form-container">
                <form class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="inputEmail4" class="form-label">使用者姓名</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">分區</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputAddress" class="form-label">地址</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputEmail4" class="form-label">檔案編號</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">服務隊</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-12 mb-3">
                        <hr class="my-4">
                        <div class="text-right mb-1">
                            <button type="submit" class="btn btn-secondary">新增膳食安排</button>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">開始日期</th>
                                    <th scope="col">結束日期</th>
                                    <th scope="col">時段</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="4" class="text-center">未有膳食安排</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">新 增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
