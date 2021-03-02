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
                    <div class="row mb-3">
                        <div class="col-auto">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <input type="week" class="form-control" id="input-week" value="2021-W06"">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
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
                                        <td class=""><input type="text" class="form-control" readonly></td>
                                        <td class=""><input type="text" class="form-control" readonly></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">午</th>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註" readonly>
                                            <input type="text" class="form-control mb-1" placeholder="2." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block" placeholder="備註" readonly>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註" readonly>
                                            <input type="text" class="form-control mb-1" placeholder="2." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block" placeholder="備註" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">晚</th>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註">
                                            <input type="text" class="form-control mb-1" placeholder="2." value="">
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="">
                                            <input type="text" class="form-control d-inline-block" placeholder="備註">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註" readonly>
                                            <input type="text" class="form-control mb-1" placeholder="2." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block" placeholder="備註" readonly>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control mb-1" placeholder="1." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-5" placeholder="備註" readonly>
                                            <input type="text" class="form-control mb-1" placeholder="2." value="" readonly>
                                            <input type="text" class="form-control d-inline-block mb-1" placeholder="配" value="" readonly>
                                            <input type="text" class="form-control d-inline-block" placeholder="備註" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="field-status">狀態</label>
                            <select class="form-control" id="field-status">
                                <option value="A">有效</option>
                                <option value="I" SELECTED>無效</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">提 交</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <style>
        .holiday { background-color: #EFEFEF;}
    </style>
@endsection
