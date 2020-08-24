@extends('quantri.layoutquantri')
@section('pagetitle', 'CHỈNH TIN TỨC')
@section('main')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif

<form action="{{ route('tintuc.update', $row->idTin) }}" method="post">
    {{ csrf_field() }}
    {!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="form-group mg-b-20">
            <input name="TieuDe" value="{{$row->TieuDe}}" class="form-control" placeholder="Nhập tiêu đề tin" required
                type="text">
        </div>
        <div class="form-group mg-b-20">
            <textarea name="TomTat" placeholder="Nhập tóm tắt của tin" class="form-control"
                rows="3">{{$row->TomTat}}</textarea>
        </div>
        <div class="form-group mg-b-20">
            <input type="file" value="{{$row->urlHinh}}" name="urlHinh" class="form-control"
                placeholder="Nhập địa chỉ hình">
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

            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="TinNoiBat" @if ($row->TinNoiBat == 1) checked @endif type="radio" value="1">
                    <span>Nổi bật</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="TinNoiBat" @if ($row->TinNoiBat == 0) checked @endif type="radio" value="0">
                    <span>Bình thường</span>
                </label>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20 wd-350">
                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>

                <input type="text" name="Ngay" value="{{$row->Ngay->format('d/m/Y')}}"
                    class="form-control fc-datepicker" placeholder="Nhập ngày đưa tin">

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
            <div class="d-flex form-group mg-b-20 wd-350">
                <input type="text" name="tags" value="{{$row->tags}}" class="form-control"
                    placeholder="Nhập tags của tin">
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="form-group wd-350">
                <select name="idTL" class="form-control">

                    <option value="0">Chọn thể loại</option>
                    @php
                    $kq = App\theloai::select("idTL", "TenTL")->get();
                    @endphp

                    @foreach ($kq as $rowTL)
                    @if ($row->idTL == $rowTL->idTL)
                    <option value="{{ $rowTL->idTL }}" selected>{{ $rowTL->TenTL }}</option>
                    @else
                    <option value="{{ $rowTL->idTL }}">{{ $rowTL->TenTL }}</option>
                    @endif
                    @endforeach

                </select>

                <script>
                $(document).ready(function() {
                    $("[name='idTL']").change(function() {
                        var idTL = $(this).val();
                        var diachi = "/asm/public/layloaitintrong1theloai/" + idTL;
                        $("[name='idLT']").load(diachi);
                    });
                });
                </script>

            </div>
            <div class="form-group wd-350">
                <select name="idLT" class="form-control">
                    <option value="0">Chọn loại tin</option>
                    @php
                    $listLT = DB::select("select idLT, Ten from loaitin WHERE idTL=" . $row->idTL ." order by ThuTu");
                    @endphp
                    @foreach ($listLT as $rowLT)
                    @if ($rowLT->idLT != $row->idLT)
                    <option value="{{$rowLT->idLT}}">{{$rowLT->Ten}}</option>
                    @else
                    <option value="{{$rowLT->idLT}}" selected>{{$rowLT->Ten}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group mg-b-20">
            <script src="{{ asset('lib') }}/highlightjs/highlight.pack.js"></script>
            <script src="{{ asset('lib') }}/medium-editor/medium-editor.js"></script>
            <script src="{{ asset('lib') }}/summernote/summernote-bs4.min.js"></script>
            <link rel="stylesheet" href="{{ asset('lib') }}/highlightjs/github.css">
            <link rel="stylesheet" href="{{ asset('lib') }}/summernote/summernote-bs4.css">
            <script>
            $(function() {
                $('#Content').summernote({
                    height: 250,
                })
            });
            </script>
            <textarea id="Content" name="Content" rows="3" placeholder="Nhập nội dung  của tin"
                class="form-control">{{$row->Content}}</textarea>
        </div>

        <!-- code hiện các field -->
        <button type="submit" class="btn btn-info">LƯU DATABASE</button>

    </div>
</form>

@endsection