<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';
    protected $hidden     = ['id','created_at','updated_at'];
    protected $table      = 'products';

    protected $fillable = [
                            'code',
                            'barcode',
                            'status',
                            'imported_t',
                            'url',
                            'product_name',
                            'quantity',
                            'categories',
                            'packaging',
                            'brands',
                            'image_url'
                        ];
}
