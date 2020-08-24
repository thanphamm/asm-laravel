@extends('quantri.layoutquantri')
@section('pagetitle', 'CHỈNH LOẠI TIN')
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

<form method="post" action="{{ route('loaitin.update', $row->idLT) }}">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên thể loại: <span class="tx-danger">*</span></label>
                <input name="Ten" value="{{$row->Ten}}" placeholder="Nhập tên loại tin" class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Thứ tự:</label>
                <input type="number" value="{{$row->ThuTu}}" name="ThuTu" placeholder="Nhập thứ tự"
                    class="form-control">
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="AnHien" @if ($row->AnHien == 1) checked @endif type="radio" value="1">
                    <span>Hiện</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="AnHien" @if ($row->AnHien == 0) checked @endif type="radio" value="0">
                    <span>Ẩn</span>
                </label>
            </div>

            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="lang" @if ($row->lang == 'vi') checked @endif type="radio" value="vi">
                    <span>Tiếng Việt</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="lang" @if ($row->lang == 'en') checked @endif type="radio" value="en">
                    <span>English</span>
                </label>
            </div>

        </div>
        <div class="d-flex flex-column">
            <div class="d-flex form-group mg-b-20">
                <select name="idTL" class="form-control select2 mg-b-20">
                    @php
                    $kq = DB::select("select idTL, TenTL from theloai order by ThuTu");
                    foreach ($kq as $rowTL) {
                    if($row->idTL == $rowTL ->idTL)
                    echo "<option value='{$rowTL -> idTL}' selected>{$rowTL -> TenTL}</option>";
                    else
                    echo "<option value='{$rowTL -> idTL}'>{$rowTL -> TenTL}</option>";
                    }
                    @endphp

                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-info">LƯU DATABASE</button>
    </div>
</form>

@endsection