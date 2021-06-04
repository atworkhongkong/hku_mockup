@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/programme">活動</a></li>
                    <li class="breadcrumb-item"><a href="/ecs/programme/{{ $programme_id }}/edit">{{ $programmes[$programme_id]['code'] }} - {{ $programmes[$programme_id]['name'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">出席記錄</li>
                </ol>
            </nav>

            <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                <a href="/ecs/programme/{{ $programme_id }}/register" class="btn btn-outline-primary">報名人數</a>
                <a href="/ecs/programme/{{ $programme_id }}/attendance" class="btn btn-primary">出席記錄</a>
                <a href="/ecs/programme/{{ $programme_id }}/waiting_list" class="btn btn-outline-primary">後補名單</a>
                <a href="/ecs/programme/{{ $programme_id }}/tutor_salary" class="btn btn-outline-primary">導師費用</a>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span></span>
                        <div>
                            <a href="/ecs/programme_attendance/2/print_attendance" target="_blank" class="btn btn-secondary">列印出席表</a>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2">姓名</th>
                        <th scope="col" rowspan="2">姓名</th>
                        <th scope="col" rowspan="2">年齡</th>
                        <th scope="col" colspan="7" class="text-center">日期</th>
                    </tr>
                    <tr>
                        <th scope="col">4/6</th>
                        <th scope="col">9/6</th>
                        <th scope="col">11/6</th>
                        <th scope="col">16/6</th>
                        <th scope="col">18/6</th>
                        <th scope="col">23/6</th>
                        <th scope="col">25/6</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $num)
                        <?php
                            $gender = Arr::random(['M', 'F']);
                            $age = rand(60,80);
                        ?>
                        <tr>
                            <td>同學{{ $num }}</td>
                            <td>{{ $gender }}</td>
                            <td>{{ $age }}</td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                            <td><input class="" type="checkbox" value=""></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">總數</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <div class="row mb-2">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">更 新</button>
                </div>
            </div>
        </div>
    </div>
@endsection
