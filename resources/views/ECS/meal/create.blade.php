@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/ecs/meal">每週飯餸</a></li>
                    <li class="breadcrumb-item active" aria-current="page">編輯每週飯餸</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="input-week" class="form-label">週份</label>
                            <input type="week" class="form-control" id="input-week" value="2021-W06"">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col" class="text-center">2月8日 (一)</th>
                                        <th scope="col" class="text-center">2月9日 (二)</th>
                                        <th scope="col" class="text-center">2月10日 (三)</th>
                                        <th scope="col" class="text-center">2月11日 (四)</th>
                                        <th scope="col" class="text-center">2月12日 (五)</th>
                                        <th scope="col" class="text-center">2月13日 (六)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">早</th>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td class="holiday"><input type="text" class="form-control" value=""></td>
                                        <td class="holiday"><input type="text" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">午</th>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block">
                                        </td>
                                        <td class="holiday">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block">
                                        </td>
                                        <td class="holiday">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">晚</th>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1.">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2.">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1.">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2.">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control mb-1" placeholder="1.">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2.">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td class="holiday">
                                            <input type="text" class="form-control mb-1" placeholder="1.">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2.">
                                            配 <input type="text" class="form-control d-inline-block" value="">
                                        </td>
                                        <td class="holiday">
                                            <input type="text" class="form-control mb-1" placeholder="1.">
                                            配 <input type="text" class="form-control d-inline-block mb-4" value="">
                                            <input type="text" class="form-control mb-1" placeholder="2.">
                                            配 <input type="text" class="form-control d-inline-block" value="">
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

    <style>
        .holiday { background-color: #EFEFEF;}
    </style>
@endsection
