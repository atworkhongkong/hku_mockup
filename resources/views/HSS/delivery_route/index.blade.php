@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">送飯路線</li>
                </ol>
            </nav>

            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到 {{ count($delivery_routes) }} 筆記錄</span>
                    <a href="/hss/delivery_route/create" class="btn btn-secondary">
                        新增送飯路線
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">名稱</th>
                            <th scope="col" style="width:6%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($delivery_routes as $k => $dr)
                            <tr>
                                <td>{{ $dr }}</td>
                                <td>
                                    <a href="/hss/delivery_route/edit/{{ $k }}"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
