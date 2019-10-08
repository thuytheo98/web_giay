@extends('admin.layout.master')
@section('content')
    <div class="edit-size" style="width: 70%; padding: 30px 30px">
        <div class="header-edit-size">
            <h2>Size</h2>
            <p>Sửa</p>
        </div>
        <div class="main-edit-size">
            <form action="{{route('suakichthuoc',$size->id)}}" method="post">
                <div class="form-group">
                    <label>Tên kích thước</label>
                    <input class="form-control" name="name_value" value="{!! $size->name !!}"/>
                </div>
                <div>
                    <button class="btn btn-default" type="submit">Lưu</button>
                    <button class="btn btn-default" type="reset">Hủy</button>
                </div>
                {{csrf_field()}}
            </form>

        </div>
    </div>
@endsection