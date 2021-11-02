<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $fillable = ['cate_name', 'show_menu', 'desc'];
    public function products()
    {
        return $this->hasMany(Product::class, 'cate_id');
    }
}
