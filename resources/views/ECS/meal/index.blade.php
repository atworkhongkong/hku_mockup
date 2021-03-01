@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">每週飯餸</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/programme" method="GET">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-week" >週份</label>
                    <input type="week" id="field-week" class="form-control mr-2" value="2021-W06" />

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到2筆記錄</span>
                        <div>
                            <a href="/ecs/meal/create" class="btn btn-secondary">新增每週飯餸</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%;">#</th>
                                <th scope="col">日期</th>
                                <th scope="col" style="width:8%;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>2021-02-08 至 2021-02-13</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/6/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2021-02-01 至 2021-02-06</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/5/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2021-01-25 至 2021-01-30</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/4/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2021-01-18 至 2021-01-23</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/3/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2021-01-11 至 2021-01-16</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/2/edit">編輯</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2021-01-04 至 2021-01-09</td>
                                <td><a class="btn btn-primary" href="/ecs/meal/1/edit">編輯</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
