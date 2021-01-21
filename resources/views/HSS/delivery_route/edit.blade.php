@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/hss/delivery_route">送飯路線</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                </ol>
            </nav>

            <div class="form-container">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="input-name" class="form-label">路線名稱</label>
                            <input type="text" class="form-control" id="input-name" value="{{ $name }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">更 新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $("#input-lend").change(function() {
            if ($(this).val() !== "") {
                $("#input-start-date").prop('disabled', false);
                $("#input-end-date").prop('disabled', false);
            } else {
                $("#input-start-date").prop('disabled', true);
                $("#input-end-date").prop('disabled', true);
            }
        })
    </script>
@endsection
