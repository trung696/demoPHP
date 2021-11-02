<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProductGallery extends Model{
    protected $table = 'product_galleries';
    public $fillable = [
        'id', 'product_id','image'
    ];
    public function getGallery(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
