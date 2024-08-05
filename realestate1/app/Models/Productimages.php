<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimages extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    protected $fillable = ['id',
                            'product_id',
                            'product_image',
                            'ord',
                            'status',
                            'created_at',
                            'updated_at'];
}
