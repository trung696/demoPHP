@extends('layouts.main')
@section('title', 'Sửa danh mục')
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" value="{{$cate->cate_name}}" class="form-control">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input"
                    @if($cate->show_menu == 1)
                    checked
                    @endif
                    value="1" name="show_menu" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị ở menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="10">{{$cate->desc}}</textarea>
                </div>
                <div class="text-right">
                    <a href="{{BASE_URL . 'danh-muc'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection