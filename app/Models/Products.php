<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['id','name','details','price','image_01','image_02','image_03']; // Kolom tabel
}