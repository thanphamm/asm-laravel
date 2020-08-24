<style>
    table.dataTable.nowrap td {white-space:normal}
</style>
<table id="datatable1" class="table display responsive nowrap" >
    <thead>
        <tr>
            <th width="120">idTin/Ngày/Email</th>
            <th>Tiêu đề/Nội dung ý kiến</th>
            <th width="180">Chỉnh/Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
        <tr>
            <td>
                <div>idTin: {{ $row->idYKien}}</div>
                <div>{{$row->Ngay->format('d/m/Y')}}</div>
                <div>Email: {{$row->Email}}</div>
            </td>
            <td>
                <h5>
                @php
                $idTin= $row->idTin;
                $y = App\tintuc::find($idTin);
                if ($y != null) echo $y->TieuDe;
                @endphp
                </h5>
                <p>{{$row->NoiDung}} </p>
            </td>
            <td>
                <div class="anhien">{{ ($row->AnHien==1)? "Tin đang hiện":"Tin đang ẩn" }}</div>
               
                <form method="post" action="{{ route('ykien.destroy' , $row->idYKien)}}">
                    {{ csrf_field()}} {!! method_field('delete') !!}
                    <a href="{{ route('ykien.edit',$row->idYKien)}}" class="btn btn-primary"> Chỉnh </a>
                    <button onclick="return confirm('Xóa hả?'); " class="btn btn-danger" type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>