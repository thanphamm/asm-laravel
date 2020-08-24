<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-10p">IDTL</th>
            <th class="wd-20p">Tên TL</th>
            <th class="wd-10p">Thứ Tự</th>
            <th class="wd-15p">Ẩn Hiện</th>
            <th class="wd-15p">Ngồn Ngữ</th>
            <th class="wd-20p">Hiện MENU</th>
            <th class="wd-5p">Chỉnh</th>
            <th class="wd-5p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
        <tr>
            <td>{{$row->idTL}}</td>
            <td>{{$row->TenTL}}</td>
            <td>{{$row->ThuTu}}</td>
            <td>{{($row->AnHien)? "Đang hiện":"Đang ẩn"}}</td>
            <td>{{($row->lang=='vi')? "Tiếng Việt":"English"}}</td>
            <td>{{($row->HienMenu==1)? "Hiện trên menu":"Ẩn trên menu"}}</td>
            <td>
                <a href="{{ route('theloai.edit', $row -> idTL) }}" class="btn btn-primary">Chỉnh</a>
            </td>
            <td>
                <form action="{{ route('theloai.destroy', $row -> idTL) }}" method="post">
                    {{ csrf_field() }}
                    {!! method_field('delete') !!}
                    <button onclick="return confirm('Xóa hả?');" class="btn btn-danger" type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>