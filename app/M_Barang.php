<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Barang extends Model
{
    public $timestamps = false;
    protected $table = "tb1_barang";
    
    protected $fillable = ['nama_produk','harga','gambar'];
}
