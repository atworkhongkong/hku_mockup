@extends('layouts.master')

@section('content')
    <style>
        table th {
            font-size: 11px;
        }
        table td {
            font-size: 10px;
        }
    </style>
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">智友醫社訓練</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/dcss" method="GET" onsubmit="return false;">
                    <label class="sr-only" for="field-center">中心</label>
                    <select id="field-center" class="form-control mr-2" name="center">
                        @foreach($centers as $k => $c)
                            <option value="{{ $k }}">{{ $c }}</option>
                        @endforeach
                    </select>

                    <label class="sr-only" for="field-group">組別</label>
                    <input type="text" class="form-control mr-2" id="field-group" placeholder="組別">

                    <button type="submit" class="btn btn-primary mx-1">搜尋</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="width:90%;">
        <div class="contain__wrapper">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到{{ count($cases) }}筆記錄</span>
                    </div>
                    <table class="table table-sm table-striped table-bordered" style="font-size:.9rem;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" rowspan="3">Name</th>
                                <th scope="col" rowspan="2">Cognitive</th>
                                <th scope="col" colspan="3">Functional</th>
                                <th scope="col" colspan="4">Psychosocial</th>
                                <th scope="col" colspan="5">Carer Burden</th>
                                <th scope="col" colspan="2"></th>
                                <th scope="col"></th>
                            </tr>
                            <tr class="text-center">
                                <th>Home safety</th>
                                <th>Independent living skill training</th>
                                <th>Balance & Ambulatory function</th>
                                <th>Illness management</th>
                                <th>Healthy life style</th>
                                <th>Patient support group</th>
                                <th>Patient counseling service</th>
                                <th>Carer training</th>
                                <th>Carer stress management</th>
                                <th>Carer support group</th>
                                <th>Carer counseling service</th>
                                <th>Dementia respite service</th>
                                <th>Drug compliance monitoring & enhancement</th>
                                <th>Centre-based nursing care for associated physical</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
