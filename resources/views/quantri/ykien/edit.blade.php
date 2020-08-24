@extends('quantri.layoutquantri')
@section('pagetitle', 'CHỈNH Ý KIẾN')
@section('main')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br>
@endif

<form method="post" action="{{ route('ykien.update', $row->idYKien) }}">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Họ Tên: <span class="tx-danger">*</span></label>
                <input name="HoTen" value="{{$row->HoTen}}" placeholder="Nhập họ tên" class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Email: <span class="tx-danger">*</span></label>
                <input name="Email" value="{{$row->Email}}" placeholder="Nhập Email" class="form-control" required>
            </div>

            <div class="form-group mg-b-20">
                <textarea name="NoiDung" placeholder="Nhập tóm tắt ý kiến" class="form-control"
                    rows="3">{{$row->NoiDung}}</textarea>
            </div>
            <div class="d-flex form-group mg-b-20">
                <select name="idTin" class="form-control select2 mg-b-20">
                    @php
                    $kq = DB::select("select idTin, TieuDe from tin order by idTin");
                    foreach ($kq as $rowTL) {
                        if($row->idTin == $rowTL->idTin)
                        echo "<option value='{$rowTL -> idTin}' selected>{$rowTL -> TieuDe}</option>";
                        else
                        echo "<option value='{$rowTL -> idTin}'>{$rowTL -> TieuDe}</option>";
                    }
                    @endphp
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20 wd-350">
                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                <input type="text" name="Ngay" value="{{$row->Ngay->format('d/m/Y')}}" class="form-control fc-datepicker" placeholder="Nhập ngày đưa ý kiến">
                <script src="{{ asset('lib') }}/jquery-ui/jquery-ui.js"></script>
                <script src="{{ asset('lib') }}/select2/js/select2.min.js"></script>
                <script>
                $(function() {
                    $('.fc-datepicker').datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'dd/mm/yy'
                    });
                })
                </script>
            </div>
            <div class="d-flex form-group" style="padding-top: 10px;">
                <label class="rdiobox">
                    <input name="AnHien" @if ($row->AnHien == 1) checked @endif type="radio" value="1">
                    <span>Hiện</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="AnHien" @if ($row->AnHien == 0) checked @endif type="radio" value="0">
                    <span>Ẩn</span>
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-info">LƯU DATABASE</button>
    </div>
</form>

@endsection