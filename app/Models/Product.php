<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id_kategori','nama','deskripsi','harga','foto'];

    public function catgoryproduct()
    {
        
        return $this->belongsTo('App\Categoryproduct','id_kategori');
    }

}
