@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/dcss_training">智友醫社訓練</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ICP</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Personal Details</span>
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div>
                                識別編號︰{{ $case['case_number'] }}
                                [<a href="/ecs/dcss/{{ $id }}/edit" target="_blank">詳細資料</a>]
                            </div>
                            <div>
                                中文姓名︰{{ $case['name'] }}
                            </div>
                            <div>
                                Burden: {{ $case['burden'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-create-date" class="form-label">Create date</label>
                    <input type="text" class="form-control" id="input-create-date" value="2021-03-01" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-update-date" class="form-label">Update date</label>
                    <input type="text" class="form-control" id="input-update-date" value="2021-03-05" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-start-date" class="form-label">Target start date</label>
                    <input type="date" class="form-control" id="input-start-date" value="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-end-date" class="form-label">Target end date</label>
                    <input type="date" class="form-control" id="input-end-date" value="">
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Cognitive</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Multi-modal cognitive stimulation activities (including exercise-based therapy)</td>
                                <td>{{ $suggest_hours['cognitive'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Functioning</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Home safety and prevention of domestic hazard programme (a minimum of 2 home visits (pre- and post-intervention) should be provided)</td>
                                <td>{{ $suggest_hours['functioning'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Independent community living skills training programme</td>
                                <td>{{ $suggest_hours['functioning'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Balance and ambulatory function training</td>
                                <td>{{ $suggest_hours['functioning'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Psychosocial</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Illness management programme</td>
                                <td>{{ $suggest_hours['psychosocial'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Healthy lifestyle enhancement programme</td>
                                <td>{{ $suggest_hours['psychosocial'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Patient support group</td>
                                <td>{{ $suggest_hours['psychosocial'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Patient counselling service</td>
                                <td>{{ $suggest_hours['psychosocial'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Carer burden</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modular-based carer training programme</td>
                                <td>{{ $suggest_hours['carer_burden'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Carer stress management course</td>
                                <td>{{ $suggest_hours['carer_burden'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Carer support group</td>
                                <td>{{ $suggest_hours['carer_burden'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Carer counselling service</td>
                                <td>{{ $suggest_hours['carer_burden'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Dementia specific respite service</td>
                                <td>{{ $suggest_hours['carer_burden'] }}</td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>BPSD</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Structured activity programme</td>
                                <td></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Physical co-morbiditie</span>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%;">Training modules</th>
                                <th scope="col">Suggested range of duration (hrs)</th>
                                <th scope="col">Minimum hours to be provided for each module</th>
                                <th scope="col">Flexible training hours assigned to specific module</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Drug compliance monitoring & enhancement programme</td>
                                <td></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                            <tr>
                                <td>Centre-based nursing care for associated physical conditions</td>
                                <td></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                                <td><input class="form-control" type="text" value="" placeholder="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">提 交</button>
                </div>
            </div>

        </div>
    </div>
@endsection
