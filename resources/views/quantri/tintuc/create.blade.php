@extends('quantri.layoutquantri')
@section('pagetitle', 'THÊM TIN TỨC')
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

<form action="{{ route('tintuc.store') }}" method="post">
    {{ csrf_field() }}
    <div class="col-9 mg-l-30">
        <div class="form-group mg-b-20">
            <input name="TieuDe" class="form-control" placeholder="Nhập tiêu đề tin" required type="text">
        </div>
        <div class="form-group mg-b-20">
            <textarea name="TomTat" placeholder="Nhập tóm tắt của tin" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group mg-b-20">
            <input type="file" name="urlHinh" class="form-control" placeholder="Nhập địa chỉ hình" required>
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

            <div class="d-flex form-group mg-b-20">
                <label class="rdiobox">
                    <input name="TinNoiBat" type="radio" value="1" checked>
                    <span>Nổi bật</span>
                </label> &nbsp;
                <label class="rdiobox">
                    <input name="TinNoiBat" type="radio" value="0">
                    <span>Bình thường</span>
                </label>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20 wd-350">
                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                <input type="text" name="Ngay" class="form-control fc-datepicker" placeholder="Nhập ngày đưa tin">
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
                <input type="text" name="tags" class="form-control" placeholder="Nhập tags của tin">
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
                    <option value="{{ $rowTL->idTL }}">{{ $rowTL->TenTL }}</option>
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
                class="form-control"></textarea>
        </div>

        <!-- code hiện các field -->
        <button type="submit" class="btn btn-info">LƯU DATABASE</button>

    </div>
</form>

@endsection