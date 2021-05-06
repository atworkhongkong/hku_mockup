@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="content__wrapper">
            <div class="alert alert-primary" role="alert">
                這個mock up是就ECS/HSS系統，由AKA向HKU發放作為參考。HKU方面，在 UI / UX 上可不必跟從這個mock up。<br>
                這個 mock up 有提及過的功能，如活動報名mock up有單人報名和多人報名，又或者某個搜尋，須要以某特定field去作搜尋，期望將來的系統亦須包含。<br>
                至於如何操作，HKU 可自由選擇以最適合的方式去implement。(例如在某個操作上，HKU 覺得以 modal overlay 形式表達，相對於不停換頁的方式會較佳的話，仍可繼續使用overlay)
                <hr>
                登記成為會員︰<br>
                現有的會員編號格式一般為︰03EL304342<br>
                頭兩個位代表中心編號，第三及第四/五個為會員類別(EL:長會員 / ELS︰綜緩長者會員)，最尾六個數字為increment number<br>
                若系統已另外有column儲存中心編號及會員類別，將來的會員編號則可簡化成只有六個位的數字<br>
                而為避免和現有編號重覆，將來系統generate會員編號時建議為AUTO_INCREMENT=700001 作開始<br>
                會員報名系統須處理會員收費後，才列印會員證。<br>
                系統須支援batch列印會員證 (因有機會有大量會員同時到counter報名，同事未必有足夠時間等待每次報名皆列印會員證，所以系統雖記錄哪位己報名會員未曾列印會員證)<br>
                個人資料轉移同意書須具備列印功能以協助長者手寫簽名<br>
                簽名完才進行收費
                <hr>
                會員類別︰<br>
                現時有幾種會員類別，包括長者會員、綜援長者會員、驕陽會員、綜援驕陽會員，不同類別會設有不同收費級別<br>
                將來有機會新增新的會員類別，而收費亦有版面可隨意調節<br>
                <hr>
                續會︰<br>
                系統須支援續會，系統須記錄會員到期日<br>
                現時不同會員類別的期限皆有不同，某個類以財政年度計算，而其他則以實際12個月計算，此方面AKA會商討有沒有簡化空間<br>
                系統須列印續會同意書，同意後才收續會費用
                <hr>
            </div>
        </div>
    </div>
@endsection
