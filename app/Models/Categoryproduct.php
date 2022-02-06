<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryproduct extends Model
{
    use HasFactory;

    protected $table = ('kategori_produk');
     protected $primaryKey = 'id';

     protected $fillable = ['kategori'];

     public function product()
     {
        return $this->hasMany('App\Product');
     }
}
