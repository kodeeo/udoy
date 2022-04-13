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

    public function categories()
    {
        return $this->belongsTo(Category::class,'categories_id','id');
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class,'brands_id','id');
    }
}
