<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
     protected $table = 'barang';
     protected $fillable = ['id_kategori','nama_barang','harga','foto1','foto2','foto3','foto4','keterangan'];
}
