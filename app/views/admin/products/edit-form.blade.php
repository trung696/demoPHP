@extends('layouts.main')
@section('title', 'Sửa danh mục')
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group"><label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="{{$pro->name}}">
                    
                </div>
                <div class="form-group"><label for="">Ảnh sản phẩm</label>
                    <img src="{{BASE_URL.'/'.$pro->image}}" alt="" width="200px">
                    
                    <label for="">Chọn Ảnh</label>
                     <input type="file" class="form-control" multiple name="image">
                
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" id="" class="form-control">
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}" @if ($item->id == $pro->cate_id)
                            selected
                        @endif>{{$item->cate_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group"><label for="">Giá</label><input type="text" name="price" class="form-control"></div>
                <div class="form-group"><label for="">Mô tả ngắn</label><input type="text" name="short_desc" class="form-control"></div>
                <div class="form-group"><label for="">Thông tin</label><input type="text" name="detail" class="form-control"></div>
                <label for="">Đánh giá</label>
                    <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="star" id="1sao">
                         <label class="form-check-label" for="1sao"> 1 sao  </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="2" type="radio" name="star" id="2sao" checked>
                        <label class="form-check-label" for="2sao">2 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="3" type="radio" name="star" id="3sao" checked>
                        <label class="form-check-label" for="3sao">3 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="star" id="4sao" checked>
                        <label class="form-check-label" for="4sao">4 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="star" id="5sao" checked>
                        <label class="form-check-label" for="5sao">5 sao</label>
                    </div> 
                    <div class="text-right">
                    <a href="{{BASE_URL . 'san-pham'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection