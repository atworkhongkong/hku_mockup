<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    @yield('top_script')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    @yield('top_style')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">HSS</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="/hss/meal">膳食會員</a></li>
                            <li><a class="dropdown-item" href="/hss/meal/create">新增膳食會員</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/hss/meal/edit">編輯膳食會員</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/hss/meal/delivery">飯線</a></li>
                            <li><a class="dropdown-item" href="/hss/delivery_route">送飯路線</a></li>
                            <li><a class="dropdown-item" href="/hss/delivery_route/create">新增送飯路線</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/hss/delivery_route/edit/1">編輯送飯路線</a></li>
                            <li><a class="dropdown-item" href="/hss/care_worker">照顧員</a></li>
                            <li><a class="dropdown-item" href="/hss/care_worker/create">新增照顧員</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/hss/care_worker/edit/1">編輯照顧員</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/hss/duty_roster">編更</a></li>
                            <li><a class="dropdown-item" href="/hss/case">個案</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">ECS1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="/ecs/programme">活動</a></li>
                            <li><a class="dropdown-item" href="/ecs/programme_register/report">活動報名統計報告</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/programme_register/balance">活動埋數</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/invoice/A0000012">收據</a></li>
                            <li><a class="dropdown-item" href="/ecs/meal_setting">膳食設定</a></li>
                            <li><a class="dropdown-item" href="/ecs/meal">每週飯餸</a></li>
                            <li><a class="dropdown-item" href="/ecs/order_meal">膳食預訂</a></li>
                            <li><a class="dropdown-item" href="/ecs/order_meal/report">每週膳食統計報告</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/meal_ingredient">膳食庫存</a></li>
                            <li><a class="dropdown-item" href="/ecs/volunteer">義工</a></li>
                            <li><a class="dropdown-item" href="/ecs/volunteer_team">義工小組</a></li>
                            <li><a class="dropdown-item" href="/ecs/volunteer_service">義工時數</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/volunteer_service/report">義工統計報告</a></li>
                            <li><a class="dropdown-item" href="/ecs/carer">謢老者</a></li>
                            <li><a class="dropdown-item" href="/ecs/carer_service">謢老者服務</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/carer_service/report">護老者統計報告</a></li>
                            <li><a class="dropdown-item" href="/ecs/hidden_elderly">隱蔽長者</a></li>
                            <li><a class="dropdown-item" href="/ecs/hidden_elderly/report">隱蔽長者統計報告</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">ECS2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/tutor">導師</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/holiday">假期</a></li>
                            <li><a class="dropdown-item" href="/ecs/product">貨品</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/purchase">購物</a></li>
                            <li><a class="dropdown-item" href="/ecs/equipment">儀器</a></li>
                            <li><a class="dropdown-item" href="/ecs/equipment_rental">租借儀器</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/equipment_rental/report">租借儀器統計報告</a></li>
                            <li><a class="dropdown-item" href="/ecs/room">房間</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/room_booking">預約房間</a></li>
                            <li><a class="dropdown-item" href="/ecs/dcss">智友醫社同行計劃</a></li>
                            <li><a class="dropdown-item" href="/ecs/dcss_training">智友醫社訓練</a></li>
                            <li><a class="dropdown-item" href="/ecs/dcss_training/report">智友醫社訓練統計</a></li>
                            <!--<li><a class="dropdown-item" href="/ecs/dcss_staff">智友醫社同工</a></li>-->
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/dcss_staff_training">智友醫社同工訓練</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/vital_sign">生命表徵</a></li>
                            <li><a class="dropdown-item" href="/ecs/report/activity_income">活動收費總結表</a></li>
                            <li><a class="dropdown-item" href="/ecs/report/daily_income">每日收入</a></li>
                            <li><a class="dropdown-item" href="/ecs/report/invoice">單據</a></li>
                            <li><a class="dropdown-item" href="/ecs/report/transaction">收費總結表</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notification" data-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell" style="font-size:1.5rem;"></i>
                            <span class="badge badge-warning navbar-badge">3</span>
                        </a>
                        <ul class="dropdown-menu pb-0" aria-labelledby="notification" style="min-width:280px; margin-left:-250px; box-shadow:3px 3px 7px rgba(0, 0, 0, 0.5);">
                            <li style="padding: 5px 10px; font-size:0.9rem; text-align:right;">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-notification">+ 即時傳遞通知</button>
                            </li>
                            <li class="p-2" style="background-color:#E9ECEF; font-size:0.9rem;">全部訊息</li>
                            <li>
                                <ul style="max-height:380px; overflow-y:scroll; list-style:none; margin:0; padding:0; background-color:#E9ECEF;">
                                    @foreach($notifications as $n)
                                        <li class="notification-item" style="background-color:white; margin:4px; border-radius:5px;">
                                            <div onclick="location.href='/ecs/dcss_staff_training/1/edit'">
                                                <div class="mb-2">{{ $n['from'] }}︰{{ $n['message'] }}</div>
                                                <p class="text-right mb-1" style="font-size:0.8rem;">
                                                    {!! $n['read'] ? '<i class="fas fa-check-circle"></i>' : '' !!} {{ $n['create_date'] }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                @include('common.component.create_notification')
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

@yield('bottom_script')
</body>
</html>
