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

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-case-number" class="form-label">Case number</label>
                    <input type="text" class="form-control" id="input-case-number" value="{{ $cases[$id]['case_number'] }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-applicant" class="form-label">Applicant</label>
                    <input type="text" class="form-control" id="input-applicant" value="{{ $cases[$id]['name'] }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="input-date">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-smoking" class="form-label">Basic</label>
                    <div>
                        @foreach($basic as $k => $v)
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="basic-{{$k}}">
                                <label class="form-check-label" for="basic-{{$k}}">
                                    {{$v}}
                                </label>
                            </div>
                        @endforeach
                    </div>
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
                                <th scope="col" style="width:50%;">Training modules</th>
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Multi-modal cognitive stimulation activities (including exercise-based therapy)</td>
                                <td><input class="form-control" type="text" value=""></td>
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
                                <th scope="col" style="width:50%;">Training modules</th>
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Home safety and prevention of domestic hazard programme (a minimum of 2 home visits (pre- and post-intervention) should be provided)</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Independent community living skills training programme</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Balance and ambulatory function training</td>
                                <td><input class="form-control" type="text" value=""></td>
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
                                <th scope="col" style="width:50%;">Training modules</th>
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Illness management programme</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Healthy lifestyle enhancement programme</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Patient support group</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Patient counselling service</td>
                                <td><input class="form-control" type="text" value=""></td>
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
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modular-based carer training programme</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Carer stress management course</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Carer support group</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Carer counselling service</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Dementia specific respite service</td>
                                <td><input class="form-control" type="text" value=""></td>
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
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Structured activity programme</td>
                                <td><input class="form-control" type="text" value=""></td>
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
                                <th scope="col">Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Drug compliance monitoring & enhancement programme</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Centre-based nursing care for associated physical conditions</td>
                                <td><input class="form-control" type="text" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Progress & Recording</span>
                </div>
                <div class="p-3">
                    <label for="input-progress-recording" class="sr-only">Progress & Recording</label>
                    <textarea class="form-control" id="input-progress-recording" rows="3"></textarea>
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
