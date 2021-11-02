@extends('layouts.main')
@section('title','Thêm sản phẩm')
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data" id="pro_form">
                     <div class="form-group">
                    <label for="">Chọn Ảnh</label>
                     <input type="file" class="form-control" multiple name="image[]">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection