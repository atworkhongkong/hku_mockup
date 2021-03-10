@extends('layouts.master')

@section('content')
    <style>
        /*
        .rotate {
            height: 100px;
            white-space: nowrap;
        }
        .rotate > div {
            transform:  rotate(270deg);
            width: 30px;
            padding-left: 20px;
        }
        */
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
                    <li class="breadcrumb-item"><a href="/ecs/dcss_training">智友醫社訓練</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $case['case_number'] }}</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/ecs/order_meal" method="GET">
                    <label class="sr-only" for="field-case-number">個案編號</label>
                    <input type="text" class="form-control mr-2" id="field-case-number" value="{{ $case['case_number'] }}">

                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="width:90%;">
        <div class="content__wrapper">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span>找到3筆紀錄</span>
                        <div>
                            <a href="/ecs/dcss_training/create?id={{ $id }}" class="btn btn-secondary">新增訓練紀錄</a>
                        </div>
                    </div>
                    <table class="table table-sm table-striped table-bordered" style="font-size:.9rem;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width:5%;" rowspan="3">Date</th>
                                <th scope="col" class="rotate" rowspan="3">Phone contact</th>
                                <th scope="col" class="rotate" rowspan="3">interview</th>
                                <th scope="col" class="rotate" rowspan="3">home visit</th>
                                <th scope="col" class="rotate" rowspan="3">group training</th>
                                <th scope="col" class="rotate" rowspan="3">others</th>
                                <th scope="col" class="rotate" rowspan="2">Cognitive</th>
                                <th scope="col" class="rotate" colspan="3">Functional</th>
                                <th scope="col" class="rotate" colspan="4">Psychosocial</th>
                                <th scope="col" class="rotate" colspan="5">Carer Burden</th>
                                <th scope="col" class="rotate" colspan="2">Physical co-morbidities</th>
                                <th scope="col" rowspan="3">Created by</th>
                                <th scope="col" rowspan="3"></th>
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
                            <tr class="text-center">
                                <th>18</th>
                                <th>2</th>
                                <th>9</th>
                                <th>9</th>
                                <th>5</th>
                                <th>5</th>
                                <th>4</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Fulfilled</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>5</td>
                                <td>1</td>
                                <td>2</td>
                                <td>0</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="text-center">
                                <td>Balance</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>-13</td>
                                <td>-1</td>
                                <td>-7</td>
                                <td>-9</td>
                                <td>-3</td>
                                <td>-2</td>
                                <td>-3</td>
                                <td>0</td>
                                <td>-1</td>
                                <td>-1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>-1</td>
                                <td>-1</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="text-center">
                                <td>2021-02-03</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>&#10003;</td>
                                <td></td>
                                <td>1.5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>0.5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>陳大文</td>
                                <td><a href="/ecs/dcss_training/1/edit"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>2021-02-10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>&#10003;</td>
                                <td></td>
                                <td>1.5</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td>0.5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>周浩文</td>
                                <td><a href="/ecs/dcss_training/2/edit"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>2021-02-17</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>&#10003;</td>
                                <td></td>
                                <td>2</td>
                                <td></td>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>譚家琪</td>
                                <td><a href="/ecs/dcss_training/3/edit"><i class="fas fa-edit"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
