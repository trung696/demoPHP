<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductGallery;

class ProductGalleryController extends BaseController
{

    public function index()
    {
        $pro = Product::all();
        $galleries = ProductGallery::all();
        $galleries->load('getGallery');
        // dd($galleries);
        $this->render('admin.gallery.Gallery', compact('galleries', 'pro'));
    }

    public function detail()
    {

        $products = Product::where('id', $_GET['proId'])->first();
        $products->load('category');
        $gal = Product::where('id', $_GET['proId'])->first();
        $gal->load('getGallery');
        $this->render(
            'clients.product.detail',
            compact('products', 'gal')
        );
    }
    public function addForm()
    {
        $pro = Product::all();
        $this->render('admin.gallery.add-form', compact('pro'));
    }

    public function saveAdd()
    {
        $requestData = $_POST;
        $files = $_FILES['image'];
        $files = $_FILES['image'];
        $names = $files['name'];
        $tmp_names = $files['tmp_name'];
        $imgs = [];
        foreach ($names as $index => $imgName) {
            $filename = 'public/uploads/' . uniqid() . '-' . $imgName;
            move_uploaded_file($tmp_names[$index], './' . $filename);
            $imgs[] = $filename;
            $requestData['image'] = $filename;
            $model = new ProductGallery();
            $model->fill($requestData);
            $model->save();
            header('location: ' . BASE_URL . 'gallery');
        }
    }
    public function checkName()
    {
        $name = $_POST['name'];
        $count = Product::where('name', $name)->count();
        echo json_encode($count == 0);
    }
    public function editForm($id)
    {
        $gal = ProductGallery::find($id);
        $pro = Product::all();
        // dd($cate);
        if (!$gal) {

            header('location:' . BASE_URL . 'gallery');
            die;
        }
        $this->render(
            'admin.gallery.edit-form',
            compact('pro', 'galleries')
        );
    }
    public function saveEdit($id)
    {
        $model = ProductGallery::find($id);

        if (!$model) {
            header('location:' . BASE_URL . 'gallery');
            die;
        }
        $requestData = $_POST;
        $file = $_FILES['image'];
        $tmp_name = $file['tmp_name'];
        $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        move_uploaded_file($tmp_name, './' . $filename);
        $requestData['image'] = $filename;
        $model->fill($requestData);
        $model->save();
        header('location:' . BASE_URL . 'gallery');
    }
    public function delete($id)
    {
        $model = ProductGallery::find($id);
        $model->delete();
        header('location:' . BASE_URL . 'gallery');
        die;
    }
}
