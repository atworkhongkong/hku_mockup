@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">編更</li>
                </ol>
            </nav>

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form-inline" action="/hss/duty_roster" method="GET">
                    <label class="sr-only" for="field-week" >星期</label>
                    <input type="week" id="field-week" class="form-control mr-2" value="2021-W03" />
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <p class="text-right">
                <button class="btn btn-secondary" onclick="confirm('確認複製更表至下週?');">
                    複製更表至下週
                </button>
            </p>

            <div class="col-12 mb-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:10%;">姓名</th>
                            <th scope="col" style="width:12%;">18/1 Mon</th>
                            <th scope="col" style="width:12%;">19/1 Tue</th>
                            <th scope="col" style="width:12%;">20/1 Wed</th>
                            <th scope="col" style="width:12%;">21/1 Thu</th>
                            <th scope="col" style="width:12%;">22/1 Fri</th>
                            <th scope="col" style="width:12%;">23/1 Sat</th>
                            <th scope="col" style="width:12%;">24/1 Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="/hss/care_worker/edit/1" target="_blank">淑惠</a>
                            </td>
                            <td class="cell">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-duty-roster-modal" class="d-block">
                                    <div class="alert alert-primary">第1節</div>
                                    <div class="alert alert-secondary">下午AL</div>
                                </a>
                            </td>
                            <td class="cell"><div class="alert alert-primary"><a href="javascript:void(0);" class="d-block">全日</a></div></td>
                            <td class="cell"><div class="alert alert-primary"><a href="javascript:void(0);" class="d-block">全日</a></div></td>
                            <td class="cell"><div class="alert alert-primary"><a href="javascript:void(0);" class="d-block">全日</a></div></td>
                            <td class="cell"><div class="alert alert-primary"><a href="javascript:void(0);" class="d-block">第1節</a></div></td>
                            <td class="cell">
                                <div class="alert alert-primary">
                                    <a href="javascript:void(0);" class="d-block">全日</a>
                                </div>
                            </td>
                            <td class="cell">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-duty-roster-modal" class="d-block">+</a>
                            </td>
                        </tr>
                        @for($i = 1 ; $i <= count($care_workers) - 1 ; $i++)
                            <tr>
                                <td>
                                    <a href="/hss/care_worker/edit/{{ $i }}" target="_blank">{{ $care_workers[$i] }}</a>
                                </td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell"><div class="alert alert-primary">全日</div></td>
                                <td class="cell">+</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

        @include('HSS.duty_roster.edit_duty_roster_modal')
    </div>

    <style>
        .cell {
            cursor: pointer;
            vertical-align: middle !important;
            text-align: center;
        }
        .cell a {
            text-decoration: none;
        }
    </style>
@endsection
