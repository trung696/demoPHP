@extends('layouts.main');
@section('title','Thêm ảnh phụ')

@section('content')
<form action="" method="post" enctype="multipart/form-data" id="pro_form">
    <div class="row">
        <div class="col-6">
            
            <div class="form-group">
                <label for="">Sản phẩm</label>
                <select name="product_id" id="" class="form-control">
                    @foreach ($pro as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <input type="file" multiple name="image[]" class="form-control" id="">
            </div>
            <div class="form-group">
                <a href="{{BASE_URL . 'san-pham'}}" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
            </div>
        </div>
    </form>
    @endsection
    @section('page-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pro_form').validate({
                rules: {
                    
                    image: {
                        required: true
                    }
                },
                messages: {
                    
                    image: {
                        required: "Hãy nhập ảnh"
                    }
                }
            });
        });
    </script>