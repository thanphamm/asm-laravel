@extends('quantri.layoutquantri')

@section('pagetitle', 'DANH SÁCH LOẠI TIN')
@section('main')
    @include("quantri/loaitin/looploaitin")
@endsection

@section('jsscript')

<script src="{{ asset('lib') }}/datatables/jquery.dataTables.js"></script>
<link href="{{ asset('lib') }}/datatables/jquery.dataTables.css" rel="stylesheet">
<script>
$(function() {
    $('#datatable1').DataTable({
        responsive: true,
        pageLength: 5,
        language: {
            searchPlaceholder: 'Tìm kiếm...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            paginate: {
                previous: " < ",
                next: " > "
            },
            lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
            zeroRecords: "Không tìm thấy",
            info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
            infoEmpty: "Không có dòng nào",
            infoFiltered: "(Lọc trong _MAX_ tin)",
        }
    });
});
</script>

@endsection