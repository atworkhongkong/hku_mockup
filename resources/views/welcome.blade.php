@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <div class="alert alert-primary" role="alert">
                這個mock up是就ECS/HSS系統，由AKA向HKU發放作為參考。HKU方面，在 UI / UX 上可不必跟從這個mock up。<br>
                這個 mock up 有提及過的功能，如活動報名mock up有單人報名和多人報名，又或者某個搜尋，須要以某特定field去作搜尋，期望將來的系統亦須包含。<br>
                至於如何操作，HKU 可自由選擇以最適合的方式去implement。(例如在某個操作上，HKU 覺得以 modal overlay 形式表達，相對於不停換頁的方式會較佳的話，仍可繼續使用overlay)
            </div>
        </div>
    </div>
@endsection
