<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="ZGvxyb3IGxNOEVlQp5H4wWtQyZ5Tuij3lfIlO4r9">

    <title>HKU</title>

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
        <div class="container my-5">
            <div class="content__wrapper">
                <div class="row my-4">
                    <div class="col-auto">
                        活動名稱
                    </div>
                    <div class="col border-bottom">

                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-auto">
                        導師
                    </div>
                    <div class="col border-bottom">

                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-auto">
                        日期
                    </div>
                    <div class="col border-bottom">

                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-auto">
                        出席人數
                    </div>
                    <div class="col border-bottom">

                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col-12 mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">姓名</th>
                                    <th scope="col">出席/缺席</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 1 ; $i <= 12 ; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>xxx</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>h
