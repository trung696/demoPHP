<?php

namespace App\Controllers;

use App\Models\Product;

class HomeController extends BaseController
{
    public function index()
    //lấy ra và hiển thị danh sách sản phẩm
    {
        $products = Product::all();
        $products->load('category');
        $this->render('clients.homepage', compact('products'));
        // tìm bên trên có biến nào là products ko , sau đó tự sinh ra 1 mảng gán thuộc tính (có thể đa giá trị)
    }
    public function detail()
    {
        echo "HomeController => detail()";
    }
}
