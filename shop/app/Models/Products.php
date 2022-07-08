<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'image',
        'title',
        'content',
        'price',
        'type',
    ];

    public function coment(){
        return $this->hasMany(coment::class,'product_id');
     }
}
