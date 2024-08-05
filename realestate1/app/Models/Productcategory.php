<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    protected $fillable = ['title','slug','cat_id','product_banner_image','is_active','is_delete','created_at','updated_at'];

    public function parentCategory()
    {
        return $this->belongsTo(Productcategory::class, 'cat_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Productcategory::class, 'cat_id');
    }

    public function findLastParentCategory($categoryId)
    {
        $category = Productcategory::find($categoryId);

        if (!$category) {
            return null; // Category not found
        }

        while ($category->parentCategory) {
            $category = $category->parentCategory;
        }

        return $category;
    }
}
