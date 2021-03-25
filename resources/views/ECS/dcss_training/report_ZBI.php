<div class="container" style="width:90%;">
    <div class="contain__wrapper">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span>找到1筆記錄</span>
                </div>
                <table class="table table-bordered" style="font-size:.9rem;">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" rowspan="2">Total no. of carers completed the assessment after receiving the services as at the end of the reporting year</th>
                            <th scope="col" rowspan="2">No. of carers with reduction of carer burden</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>30</td>
                            <td>20</td>
                        </tr>
                        <tr class="text-center">
                            <td></td>
                            <td>66.67%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="alert alert-primary" role="alert">
            提示︰<br>
            第一個column: 智友醫社同行計劃 > 個案編輯 > 活動前 + 活動後評估內，都有填寫過ZBI分數的人數<br>
            Logic:<br>SELECT COUNT(*) FROM assessments WHERE zbi IS NOT NULL AND period = 'before' AND YEAR(create_date) = 2021;<br><br>
            第二個column: 智友醫社同行計劃 > 個案編輯 > 活動後評估內，有填寫過ZBI分數，而分數是少過「活動前評估」的ZBI分數的人數<br>
            Logic:<br>
            SELECT case_number, zbi AS zbi_after FROM assessments WHERE zbi IS NOT NULL AND period = 'after' AND YEAR(create_date) = 2021;<br>
            SELECT case_number, zbi AS zbi_before FROM assessments WHERE zbi IS NOT NULL AND period = 'before' AND YEAR(create_date) = 2021;<br>
            Then compare each case_number, if zbi_after < zbi_before, then count++
        </div>
    </div>
</div>


