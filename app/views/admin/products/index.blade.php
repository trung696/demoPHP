@extends('layouts.main')
@section('title', 'Danh sách Sản phẩm')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        <th>Ảnh Sản phẩm</th>
                        <th>Tên danh mục</th>
                        <th>Giá Sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Chi tiết</th>
                        <th>Đánh giá</th>
                        <th>
                            <a href="{{BASE_URL . 'san-pham/add'}}" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        
                        @foreach ($pros as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td class=""><img src="{{$item->image}}" width="100px" alt=""></td>
                                
                                <td value="{{$item->cate_id}}">{{$item->Category->cate_name}}</td>
                    
                                <td>{{$item->price}}</td>
                                <td>{{$item->short_desc}}</td>
                                <td>{{$item->detail}}</td>
                                <td>{{$item->star}}</td>
                                <td>
                                    <a href="{{BASE_URL . 'san-pham/edit/' . $item->id}}" class="btn btn-sm btn-primary">Sửa</a>
                                    <a href="{{BASE_URL . 'san-pham/delete/' . $item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection