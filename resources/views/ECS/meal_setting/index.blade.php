@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">膳食設定</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/meal_setting" method="GET">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">

                    <div class="form-container">
                        <form class="row g-3">
                            <div class="col-md-4 mb-3">
                                <label for="input-breakfast-price" class="form-label">早餐價錢</label>
                                <input type="text" class="form-control" id="input-breakfast-price" value="8">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-lunch-price" class="form-label">午餐價錢</label>
                                <input type="text" class="form-control" id="input-lunch-price" value="12">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-dinner-price" class="form-label">晚餐價錢</label>
                                <input type="text" class="form-control" id="input-dinner-price" value="12">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-breakfast-quota" class="form-label">長者會員早餐限額</label>
                                <input type="text" class="form-control" id="input-breakfast-quota" value="999">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-lunch-quota" class="form-label">長者會員午餐限額</label>
                                <input type="text" class="form-control" id="input-lunch-quota" value="999">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-dinner-quota" class="form-label">長者會員晚餐限額</label>
                                <input type="text" class="form-control" id="input-dinner-quota" value="999">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-breakfast-quota" class="form-label">驕陽會員早餐限額</label>
                                <input type="text" class="form-control" id="input-breakfast-quota" value="5">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-lunch-quota" class="form-label">驕陽會員午餐限額</label>
                                <input type="text" class="form-control" id="input-lunch-quota" value="5">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="input-dinner-quota" class="form-label">驕陽會員晚餐限額</label>
                                <input type="text" class="form-control" id="input-dinner-quota" value="5">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">更 新</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
