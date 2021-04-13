@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">服務費</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 mb-3">
                    <p>膳食</p>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>等級</td><td>材料費</td><td>服務費</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['meal'] as $d)
                            <tr>
                                <td>{{ $d['grade'] }}</td>
                                <td>{{ Helper::formatMoney($d['ingredient'], true) }}</td>
                                <td>{{ Helper::formatMoney($d['fee'], true) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <hr class="my-5">

                    <p>洗衣</p>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>種類</td><td>費用</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['laundry'] as $d)
                            <tr>
                                <td>{{ $LAUNDRY_FEES[$d['type']] }}</td>
                                <td>{{ Helper::formatMoney($d['fee'], true) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <hr class="my-5">

                    <p>服務</p>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>等級</td><td>服務費</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['service'] as $d)
                            <tr>
                                <td>{{ $d['grade'] }}</td>
                                <td>{{ Helper::formatMoney($d['fee'], true) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
