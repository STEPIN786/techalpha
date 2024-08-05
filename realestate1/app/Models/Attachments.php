<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;
    protected $table = 'attachments';
    protected $fillable = ['id',
                            'product_id',
                            'file_name',
                            'status',
                            'created_at',
                            'updated_at'];
}
