<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController
{
    // public function index()
    // {
    //     echo "ProductController=>index()";
    // }

    public function index()
    {
        $categories = Category::all();
        $pros = Product::all();
        $pros->load('category');
        $this->render('admin.products.index', compact('pros', 'categories'));
    }
    public function uploadForm()
    {
        $this->render('admin.products.upload-form');
    }
    public function saveImage()
    {

        // $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        // move_uploaded_file($file['tmp_name'], './' . $filename);
    }

    public function addForm()
    {
        $categories = Category::all();
        $products = Product::all();
        $this->render('admin.products.add-form', compact('categories', 'products'));
    }


    public function saveAdd()
    {
        $requestData = $_POST;

        $errors = [];
        if (strlen($requestData['name']) <= 0) {
            $errors['name'] = "Hãy nhập tên Sản phẩm";
        } else if (Product::where('name', $requestData['name'])->count() > 0) {
            $errors['name'] = "Tên Sản phẩm đã tồn tại";
        }
        if (strlen($requestData['short_desc']) <= 0) {
            $errors['detail'] = "Hãy nhập mô tả ngawns";
        }
        if (!intval($requestData['price']) > 0) {
            $errors['price'] = "Giá phải lớn hơn 0";
        }

        if (strlen($requestData['detail']) <= 0) {
            $errors['detail'] = "Hãy nhập Chi tiết";
        }

        if (count($errors) > 0) {

            $this->render('admin.products.add-form', compact('errors'));
            die;
        }
        $file = $_FILES['image'];
        $tmp_name = $file['tmp_name'];
        $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        move_uploaded_file($tmp_name, './' . $filename);
        if (!isset($filename)) {
            $requestData['image'] = $filename;
        }

        //dd($requestData);

        $model = new Product();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'san-pham');
    }


    public function checkNameExisted()
    {
        $name = $_POST['name'];
        $count = Product::where('name', $name)->count();
        echo json_encode($count == 0);
    }
    public function remove($id)
    {
        $model = Product::find($id);
        $model->delete();
        header('location: ' . BASE_URL . 'san-pham');
    }
    public function editForm($id)
    {
        $categories = Category::all();
        $pro = Product::find($id);
        if (!$pro) {
            header('location: ' . BASE_URL . 'san-pham');
            die;
        }

        $this->render('admin.products.edit-form', compact('pro', 'categories'));
    }
    public function saveEdit($id)
    {
        $requestData = $_POST;
        $model = Product::find($id);
        if (!$model) {
            header('location: ' . BASE_URL . 'san-pham');
            die;
        }

        $file = $_FILES['image'];
        $tmp_name = $file['tmp_name'];
        $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        move_uploaded_file($tmp_name, './' . $filename);
        if (!isset($filename)) {
            $requestData['image'] = $filename;
        }
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'san-pham');
    }
}
