@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">活動</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/programme" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-area">搜尋範圍</label>
                            <select id="field-area" class="form-control mr-2" name="team">
                                <option value="">活動編號</option>
                                <option value="">中文名稱</option>
                                <option value="">地點</option>
                                <option value="">報名名額</option>
                                <option value="staff">負責職員</option>
                                <option value="tutor" {{ $area == 'tutor' ? 'SELECTED' : '' }}>負責導師</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-keyword" >關錄字</label>
                            <input type="text" id="field-name" class="form-control" placeholder="關鍵字" value="{{ $keyword }}"/>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-auto">
                            <label class="sr-only" for="field-done">結算狀態</label>
                            <select id="field-area" class="form-control">
                                <option value=""></option>
                                <option value="">未結算</option>
                                <option value="">已結算</option>
                                <option value="">已支付</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 g-0">
                        <div class="col-auto">
                            <label class="sr-only" for="field-start-date">開始日期</label>
                            <input type="date" id="field-start-date" class="form-control" />
                        </div>
                        <div class="col-auto px-0 pt-2">
                            至
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到2筆記錄</span>
                        <div>
                            <a href="/ecs/programme_register/create" class="btn btn-secondary">單人報名</a>
                            <a href="/ecs/programme_register/create_multiple" class="btn btn-secondary">多人報名</a>
                            <a href="/ecs/programme/create" class="btn btn-secondary">新增活動</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" style="width:15%;">活動編號</th>
                            <th scope="col" style="width:15%;">名稱</th>
                            <th scope="col">名額</th>
                            <th scope="col">報讀人數</th>
                            <th scope="col">開始日期</th>
                            <th scope="col">結束日期</th>
                            <th scope="col">負責同事</th>
                            <th scope="col">狀態</th>
                            <th scope="col">批核狀態</th>
                            <th scope="col" style="width:15%;">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>JM30130</td>
                            <td>親子天地</td>
                            <td>20</td>
                            <td>2</td>
                            <td>2021-03-01</td>
                            <td>2021-03-01</td>
                            <td>同事A</td>
                            <td>正常</td>
                            <td>已批核</td>
                            <td>
                                <a class="btn btn-primary" href="/ecs/programme/2/edit">編輯</a>
                                <a class="btn btn-primary" href="/ecs/programme/2/register">更多...</a>
                            </td>
                        </tr>
                        <tr>
                            <td>JM30129</td>
                            <td>粵曲欣賞</td>
                            <td>30</td>
                            <td>1</td>
                            <td>2021-03-02</td>
                            <td>2021-03-02</td>
                            <td>同事B</td>
                            <td>暫停</td>
                            <td>已批核</td>
                            <td>
                                <a class="btn btn-primary" href="/ecs/programme/1/edit">編輯</a>
                                <a class="btn btn-primary" href="/ecs/programme/1/register">更多...</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
