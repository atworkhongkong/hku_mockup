<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

        <div class="container">
            <div class="my-5">
                <h4 class="text-left">香港仔街坊福利會</h4>
                <h5 class="text-left">退款收據</h5>
            </div>
            <div class="row my-2">
                <div class="col-12">日期︰2021-02-15</div>
            </div>
            <div class="row my-2">
                <div class="col-md-6">會員編號︰03EL300102</div>
                <div class="col-md-6">會員姓名︰陳永仁</div>
            </div>
            <div class="row my-2">
                <div class="col-md-6">退款參考編號︰RFD20012</div>
                <div class="col-md-6">活動︰JM30130 - 親子天地</div>
            </div>
            <div class="row my-2">
                <div class="col-md-6">退款形式︰現金</div>
                <div class="col-md-6">退款金額︰$xxx.0</div>
            </div>
            <div class="row mt-5">
                <div class="col-auto">經手人簽署︰</div>
                <div class="col border-bottom"></div>
            </div>
            <div class="row mt-5">
                <div class="col-auto">收款人簽署︰</div>
                <div class="col border-bottom"></div>
            </div>
            <div class="row mt-5">
                <div class="col-auto">日期︰</div>
                <div class="col border-bottom"></div>
            </div>
        </div>

    </div>
</body>
</html>
