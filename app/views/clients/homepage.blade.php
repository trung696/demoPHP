@extends('layouts.main')
@section('title', 'Trang chủ')
@section('content')
    <h2>Danh sách sản phẩm</h2>
    @foreach ($products as $pro)
        <div style="border: 1px solid #ccc; display: inline-block;">
            <h3>Sản phẩm: {{$pro->name}}</h3>
            <p>Giá: {{$pro->price}}</p>
            <p>Danh mục: {{$pro->category->cate_name}}</p>
        </div>
    @endforeach
@endsection