<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['id',
                            'cat_id',
                            'slug',
                            'title',
                            'description',
                            'map_link',
                            'floor_plan',
                            'address',
                            'video_link',
                            'price',
                            'listed_for',
                            'amenities',
                            'features',
                            'additional_details',
                            'phone',
                            'email',
                            'is_active',
                            'is_delete',
                            'created_at',
                            'updated_at'];
}
