@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">護老者統計報告</li>
                </ol>
            </nav>

            @include('ECS.component.carer_report_menu')

            <div class="form-container pb-4 mb-4 border-bottom border-muted rounded">
                <form class="form" action="/ecs/carer/report" method="GET">
                    <div class="row mb-2">
                        <div class="col-auto pr-1">
                            <label class="sr-only" for="field-center">中心</label>
                            <select id="field-center" class="form-control mr-2" name="center">
                                @foreach($centers as $k => $c)
                                    <option value="{{ $k + 1 }}">{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($type !== '')
                            <div class="col-auto pr-1">
                                <label class="sr-only" for="field-carer-type">顧老者類別</label>
                                <select id="field-carer-type" class="form-control mr-2">
                                    <option></option>
                                    <option value="">護老者</option>
                                    <option value="">有需要護老者</option>
                                </select>
                            </div>
                        @endif
                    </div>

                    <div class="row mb-2 g-0">
                        @if ($type != 'accumulate')
                            <div class="col-auto">
                                <label class="sr-only" for="field-start-date">開始日期</label>
                                <input type="date" id="field-start-date" class="form-control" />
                            </div>
                            <div class="col-auto px-0 pt-2">
                                至
                            </div>
                        @endif

                        <div class="col-auto">
                            <label class="sr-only" for="field-end-date">結束日期</label>
                            <input type="date" id="field-end-date" class="form-control" value="2021-02-18" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜尋</button>
                </form>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    @if ($type == '')
                        <?php $count = 0; ?>
                    @elseif ($type == 'new')
                        <?php $count = 2; ?>
                    @elseif ($type == 'accumulate')
                        <?php $count = count($carers); ?>
                    @elseif ($type == 'transfer')
                        <?php $count = 0; ?>
                    @elseif ($type == 'reactivate')
                        <?php $count = 0; ?>
                    @elseif ($type == 'close')
                        <?php $count = count($carers); ?>
                    @elseif ($type == 'active')
                        <?php $count = 3; ?>
                    @endif

                        <div class="d-flex justify-content-between align-items-center mb-1">
                            @if ($type == 'close')
                                <span>找到 1 筆記錄</span>
                            @else
                                <span>找到 {{ $count }} 筆記錄</span>
                            @endif
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="width:10%;">識別編號</th>
                                <th scope="col">護老者</th>
                                <th scope="col">類別</th>
                                <th scope="col">開啟日期</th>
                                <th scope="col">狀態</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($i = 1 ; $i <= $count ; $i++)
                                @if ($type == 'close')
                                    @if ($carers[$i]['status'] == 'I')
                                        <tr>
                                            <td><a href="/ecs/carer/{{ $i }}/edit" target="_blank">{{ $carers[$i]['code'] }}</a></td>
                                            <td>{{ $carers[$i]['name'] }}</td>
                                            <td>{{ $carers[$i]['type'] }}</td>
                                            <td>{{ $carers[$i]['create_date'] }}</td>
                                            <td>{{ $statuses[$carers[$i]['status']] }}</td>
                                        </tr>
                                    @endif
                                @else
                                    <tr>
                                        <td><a href="/ecs/carer/{{ $i }}/edit" target="_blank">{{ $carers[$i]['code'] }}</a></td>
                                        <td>{{ $carers[$i]['name'] }}</td>
                                        <td>{{ $carers[$i]['type'] }}</td>
                                        <td>{{ $carers[$i]['create_date'] }}</td>
                                        <td>{{ $statuses[$carers[$i]['status']] }}</td>
                                    </tr>
                                @endif
                            @endfor
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
