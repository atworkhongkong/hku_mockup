@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/carer_service">護老者服務</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service['desc'] }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="input-service-type" class="form-label">服務類別</label>
                    <select class="custom-select" aria-label="Disabled select example">
                        @foreach($service_types as $k => $s)
                            <option value="" {{ $k == $service['service_type_id'] ? 'SELECTED' : '' }}>{{ $s }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="input-service-date" class="form-label">服務日期</label>
                    <input type="date" class="form-control" id="input-service-date" value="{{ $service['service_date'] }}">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-remark" class="form-label">備註</label>
                    <textarea class="form-control" id="input-remark" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="input-recording" class="form-label">紀錄</label>
                    <textarea class="form-control" id="input-recording" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="input-contact-person" class="form-label">負責同事/聯絡人</label>
                    <input type="text" class="form-control" id="input-contact-person" value="{{ $service['contact_person'] }}">
                </div>
            </div>

            <hr class="my-5">

            <div class="form-container">
                <form>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>對象</span>
                            <span>
                                <input type="text" class="form-control" list="carer-list" placeholder="搜尋護老者" />
                                <datalist id="carer-list">
                                      <option value="J00001 黃柏宇">
                                      <option value="J00002 詹晏靖">
                                      <option value="J00003 楊智盈">
                                      <option value="J00004 廖怡秀">
                                </datalist>
                            </span>
                        </div>
                        <div class="p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">識別編號</th>
                                        <th scope="col">謢老者</th>
                                        <th scope="col">類別</th>
                                        <th scope="col">被護老者</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" value="J00001" readonly></td>
                                        <td><input type="text" class="form-control" value="黃柏宇" readonly></td>
                                        <td><input type="text" class="form-control" value="謢老者" readonly></td>
                                        <td><input type="text" class="form-control" value="李雅辛" readonly></td>
                                        <td>
                                            <a href="/ecs/carer/1/edit" target="_blank"><i class="far fa-info-circle"></i></a>
                                            <i class="far fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" value="J00003" readonly></td>
                                        <td><input type="text" class="form-control" value="楊智盈" readonly></td>
                                        <td><input type="text" class="form-control" value="謢老者" readonly></td>
                                        <td><input type="text" class="form-control" value="李孟宸" readonly></td>
                                        <td>
                                            <a href="/ecs/carer/3/edit" target="_blank"><i class="far fa-info-circle"></i></a>
                                            <i class="far fa-trash"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
