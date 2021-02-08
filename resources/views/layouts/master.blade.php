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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
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
                            <li><a class="dropdown-item" href="/hss/duty_roster">編更</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">ECS</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="/ecs/programme">活動</a></li>
                            <li><a class="dropdown-item" href="/ecs/programme/create">新增活動</a></li>
                            <li><a class="dropdown-item" href="/ecs/programme/2/edit">編輯活動</a></li>
                            <li><a class="dropdown-item" href="/ecs/programme_register/create">單人報名</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/programme_register/create_multiple">多人報名</a></li>
                            <li><a class="dropdown-item" href="/ecs/meal">每週飯餸</a></li>
                            <li><a class="dropdown-item" href="/ecs/order_meal">膳食預訂</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/order_meal/report">每週膳食預訂紀錄</a></li>
                            <li><a class="dropdown-item" href="/ecs/volunteer">義工</a></li>
                            <li><a class="dropdown-item" href="/ecs/volunteer_service">義工時數</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="/ecs/volunteer_service/report">義工時數總結</a></li>
                            <li><a class="dropdown-item" href="/ecs/tutor">導師</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
