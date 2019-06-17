<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    //
    protected $table = 'tb_product';
    protected $fillable = ['kdProduct','namaProduk','kdSatuan','kategori','hargaJual','diskon','isi','promo'];
    protected $primaryKey = 'kdProduct';
    public $incrementing = false;
}
