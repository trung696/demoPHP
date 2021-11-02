<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProductController;
use App\Controllers\ProductGalleryController;
use Phroute\Phroute\RouteCollector;


$url = isset($_GET['url']) ? $_GET['url'] : "/";

$router = new RouteCollector();
############ - filter - #############
$router->filter('auth', function () {
    if (!isset($_SESSION['AUTH']) || empty($_SESSION['AUTH'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});
############ - end filter - #############



$router->get('/', [HomeController::class, 'index']);
$router->get('danh-muc', [CategoryController::class, 'index']);

$router->group(['before' => 'auth'], function ($router) {
    $router->get('danh-muc/add', [CategoryController::class, 'addForm']);
    $router->post('danh-muc/add', [CategoryController::class, 'saveAdd']);

    $router->get('danh-muc/edit/{id}', [CategoryController::class, 'editForm']);
    $router->post('danh-muc/edit/{id}', [CategoryController::class, 'saveEdit']);
    $router->post('danh-muc/check-name', [CategoryController::class, 'checkNameExisted']);
    $router->get('danh-muc/delete/{id}', [CategoryController::class, 'remove']);
    $router->post('danh-muc/delete/{id}', [CategoryController::class, 'remove']);
});


$router->get('login', [LoginController::class, 'loginForm']);
$router->post('login', [LoginController::class, 'postLogin']);
$router->any('logout', [LoginController::class, 'logout']);

$router->get('demo-upload', [ProductController::class, 'uploadForm']);
$router->post('demo-upload', [ProductController::class, 'saveImage']);


//sản phẩm here
$router->get('san-pham', [ProductController::class, 'index']);
$router->get('san-pham/add', [ProductController::class, 'addForm']);
$router->post('san-pham/add', [ProductController::class, 'saveAdd']);
$router->get('san-pham/delete/{id}', [ProductController::class, 'remove']);
$router->post('san-pham/delete/{id}', [ProductController::class, 'remove']);
$router->get('san-pham/edit/{id}', [ProductController::class, 'editForm']);
$router->post('san-pham/edit/{id}', [ProductController::class, 'saveEdit']);

//gallery here
$router->get('gallery', [ProductGalleryController::class, 'index']);

$router->get('gallery/add', [ProductGalleryController::class, 'addForm']);
$router->post('gallery/add', [ProductGalleryController::class, 'saveAdd']);

$router->get('gallery/delete/{id}', [ProductGalleryController::class, 'delete']);
$router->post('gallery/delete/{id}', [ProductController::class, 'delete']);
$router->get('gallery/edit/{id}', [ProductGalleryController::class, 'editForm']);
$router->post('gallery/edit/{id}', [ProductController::class, 'saveEdit']);





# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
