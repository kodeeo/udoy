<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
