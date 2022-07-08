<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addProduct extends Model
{
    use HasFactory;
    protected $table = 'add_products';
    protected $fillable = [
        'user_id',
        'product_id',
    ];


    public function Products(){
        return $this->belongsTo(Products::class);
    }
}
