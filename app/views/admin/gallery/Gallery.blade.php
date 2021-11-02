@extends('layouts.main')
@section('title','Gallery')
@section('content')

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>Id</th>
            <th>Sản phẩm</th>
            <th>Ảnh</th>
            <th>
                <a href="{{BASE_URL}}./product-gallery/addGal" class="btn btn-sm btn-success">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($galleries as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td value="{{$item->product_id}}" >{{$item->Product->name}}</td>
                <td><img src="{{$item->image}}" alt="" class="" width="100px"></td>
                <td>
                    <a href="{{BASE_URL.'gallery/edit/'.$item->id}}" class="btn btn-sm btn-primary">Sửa</a>
                    <a href="{{BASE_URL.'gallery/delete/'.$item->id}}" onclick="return confirm('Bạn có muốn xóa?')" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




