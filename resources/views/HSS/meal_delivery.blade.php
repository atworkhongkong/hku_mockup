@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
            <form class="form-inline" action="/hss/meal_delivery" method="GET">
                <label class="sr-only" for="field-date">日期</label>
                <input type="date" id="field-date" class="form-control mr-2" />


                <label class="sr-only" for="field-month">月份</label>
                <select id="field-month" class="form-control mr-2" name="month">
                    <option value="">請選擇時段</option>
                    <option value="am">上午</option>
                    <option value="pm">下午</option>
                </select>
                <button type="submit" class="btn btn-primary">搜尋</button>
            </form>
        </div>

        <div class="content__wrapper">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">收費類別</th>
                    <th scope="col">活動名稱</th>
                    <th scope="col">收入</th>
                    <th scope="col">作費收據</th>
                    <th scope="col">總計</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
