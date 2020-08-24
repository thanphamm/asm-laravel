@extends('quantri.layoutquantri')
@section('pagetitle', 'THÊM LOẠI TIN')
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

<form method="post" action="{{ route('loaitin.store') }}">
    {{ csrf_field()}}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên thể loại: <span class="tx-danger">*</span></label>
                <input name="Ten" placeholder="Nhập tên loại tin" class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Thứ tự:</label>
                <input type="number" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="AnHien" type="radio" value="1" checked>
                    <span>Hiện</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="AnHien" type="radio" value="0">
                    <span>Ẩn</span>
                </label>
            </div>

            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="lang" type="radio" value="vi" checked>
                    <span>Tiếng Việt</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="lang" type="radio" value="en">
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