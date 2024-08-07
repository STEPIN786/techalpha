<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    use HasFactory;
    protected $table = 'contact_inquiry';
    protected $fillable = ['product_id', 'name', 'email','mobile','message','status','created_at','updated_at'];
}
