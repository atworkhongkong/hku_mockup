<div class="form-container">
    <form>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>緊急聯絡人</span>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="input-son-count" class="form-label">同住兒子人數</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="input-daughter-count" class="form-label">同住女兒人數</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <table class="table table-sm my-4">
                    <thead>
                    <tr>
                        <th scope="col">姓名</th>
                        <th scope="col">年齡</th>
                        <th scope="col">關係</th>
                        <th scope="col">性別</th>
                        <th scope="col">個人每月平均入息</th>
                        <th scope="col">個人儲蓄/資產</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 1 ; $i <= 4 ; $i++)
                        <tr>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td>
                                <select class="custom-select custom-select-sm" aria-label="Default select example">
                                    <option></option>
                                    <option value="M">男</option>
                                    <option value="F">女</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-4">
                        <label for="input-son-count2" class="form-label">不同住兒子人數</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-son-count2a" class="form-label">在港</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-son-count2b" class="form-label">內陸/移民</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="input-daughter-count2" class="form-label">不同住女兒人數</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-daughter-count2a" class="form-label">在港</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="input-daughter-count2b" class="form-label">內陸/移民</label>
                        <select class="custom-select" aria-label="Default select example">
                            @for ($i = 0 ; $i <= 10 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>緊急聯絡人</span>
            </div>
            <div class="p-3">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">姓名</th>
                            <th scope="col">關係</th>
                            <th scope="col">電話</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1 ; $i <= 2 ; $i++)
                            <tr>
                                <td><input type="text" class="form-control form-control-sm"></td>
                                <td><input type="text" class="form-control form-control-sm"></td>
                                <td><input type="text" class="form-control form-control-sm"></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>經濟狀況</span>
            </div>
            <div class="p-3">
                <div>
                    <p>收入</p>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb1">
                                <label class="form-check-label" for="cb1">
                                    綜援
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2" placeholder="綜援編號"></span>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb2">
                                <label class="form-check-label" for="cb2">
                                    傷殘津貼
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb3">
                                <label class="form-check-label" for="cb3">
                                    高齡津貼
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb4">
                                <label class="form-check-label" for="cb4">
                                    同住家人總入息
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2"></span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb5">
                                <label class="form-check-label" for="cb5">
                                    人供養平均每月
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2"></span>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb6">
                                <label class="form-check-label" for="cb6">
                                    個人積蓄
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb7">
                                <label class="form-check-label" for="cb7">
                                    樓宇供款
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2"></span>
                        </div>
                    </div>
                </div>

                <div>
                    <p>支出</p>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb8">
                                <label class="form-check-label" for="cb8">
                                    租金
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2"></span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 d-flex align-items-center">
                            <div>
                                <input class="" type="checkbox" value="" id="cb9">
                                <label class="form-check-label" for="cb9">
                                    樓宇供款
                                </label>
                            </div>
                            <span><input type="text" class="form-control d-inline-block ml-2"></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
