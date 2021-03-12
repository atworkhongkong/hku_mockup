@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/tutor">導師</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $tutor['name'] }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">所屬中心</label>
                            <select class="custom-select" aria-label="select example">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-tutor-code" class="form-label">導師編號</label>
                            <input type="text" class="form-control" id="input-tutor-code">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-tutor-type" class="form-label">導師類別</label>
                            <select class="form-control" id="input-tutor-type">
                                <option value="">個人</option>
                                <option value="">承辦機構</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-chi-name" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="input-chi-name" value="{{ $tutor['name'] }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-eng-name" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="input-eng-name" value="xxx xxx xxx">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-gender">性別</label>
                            <select class="form-control" id="input-gender">
                                <option value="M">男</option>
                                <option value="F">女</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-hkid" class="form-label">身份證號碼</label>
                            <input type="text" class="form-control" id="input-hkid" value="Exxxxxx(x)">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-address" class="form-label">住址</label>
                            <input type="text" class="form-control" id="input-address">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-dob" class="form-label">出生日期</label>
                            <input type="text" class="form-control" id="input-dob">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-phone" class="form-label">聯絡電話</label>
                            <input type="text" class="form-control" id="input-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-email" class="form-label">電郵地址</label>
                            <input type="text" class="form-control" id="input-email" value="xxx@example.com">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-skill" class="form-label">專長</label>
                            <input type="text" class="form-control" id="input-skill" value="電腦、舞蹈、話劇">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input-bank-name" class="form-label">銀行名稱</label>
                            <input type="text" class="form-control" id="input-bank-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input-bank-account" class="form-label">戶口號碼</label>
                            <input type="text" class="form-control" id="input-bank-account">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="input-center" class="form-label">狀態</label>
                            <select class="custom-select" aria-label="select example">
                                <option value="A">有效</option>
                                <option value="I">無效</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">更 新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
