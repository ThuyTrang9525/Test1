<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product1 extends Model
{
    use HasFactory;

    protected $table = 'product1';

    protected $fillable = [
        'name',
        'price',
        'image',
        'cate_id',
        'website',
        'email',
        'company_name',
        'address',
    ];

    public $timestamps = true;

    // Quan hệ: Mỗi sản phẩm thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id'); 
    }
}
