<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    use HasFactory;
    protected $table = 'coments';
    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'type',
        'coment',
    ];

    public function Products(){
        return $this->belongsTo(Products::class);
     }

}
