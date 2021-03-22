<div class="form-container">
    <form>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="input-flat">居住類別</label>
                <select class="form-control" id="input-flat">
                    <option>公屋</option>
                    <option>私人樓宇 (租/自置)</option>
                    <option>居屋</option>
                    <option>其他</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="input-flat-other">居住類別 (其他)</label>
                <input type="text" class="form-control" id="input-flat-other" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="input-flat-type">居住形式</label>
                <select class="form-control" id="input-flat-type">
                    <option>床位</option>
                    <option>房間</option>
                    <option>獨立單位</option>
                    <option>屒者屋</option>
                    <option>其他</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="input-flat-type-other">居住形式 (其他)</label>
                <input type="text" class="form-control" id="input-flat-type-other" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="input-carer-live-with" class="form-label">居住情況</label>
                <div>
                    @foreach($living_statuses as $k => $v)
                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="input-living-status-{{$k}}">
                        <label class="form-check-label" for="input-living-status-{{$k}}">
                            {{$v}}
                        </label>
                        @if ($k == count($living_statuses) - 1)
                        <input type="text" class="form-control form-control-sm d-inline-block ml-2" style="width:auto;" id="input-living-status-other">
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">提 交</button>
            </div>
        </div>
    </form>
</div>
