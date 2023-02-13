<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    function rel_to_subcategory(){
        return $this->belongsTo(SubCategory::class, 'product_subcategory');
    }
    function rel_to_category(){
        return $this->belongsTo(Category::class, 'product_category');
    }

}