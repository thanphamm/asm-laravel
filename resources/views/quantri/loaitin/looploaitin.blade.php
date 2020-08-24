<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-15p">idLT</th>
            <th class="wd-15p">Tên</th>
            <th class="wd-20p">Thứ Tự</th>
            <th class="wd-15p">Ẩn Hiện/th>
            <th class="wd-10p">Ngôn Ngữ</th>
            <th class="wd-10p">Tên Thể Loại</th>
            <th class="wd-5p">Chỉnh</th>
            <th class="wd-5p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
        <tr>
            <td>{{$row -> idLT}}</td>
            <td>{{$row -> Ten}}</td>
            <td>{{$row -> ThuTu}}</td>
            <td>{{($row -> AnHien)? "Đang hiện":"Đang ẩn"}}</td>
            <td>{{($row -> lang == 'vi')? "Tiếng Việt":"English"}}</td>
            <td>
                @php
                $idTL= $row->idTL;
                $tl = App\theloai::find($idTL);
                if ($tl != null) echo $tl->TenTL;
                @endphp
            </td>
            <td>
                <a href="{{ route('loaitin.edit', $row->idLT)}}" class="btn btn-primary">Chỉnh</a>
            </td>
            <td>
                <form action="{{ route('loaitin.destroy', $row->idLT)}}" method="post">
                    {{ csrf_field()}}
                    {!! method_field('delete')!!}
                    <button onclick="return confirm('Xóa hả?');" class="btn btn-danger" type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>