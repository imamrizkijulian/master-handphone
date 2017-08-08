<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['id_barang','nama_barang','satuan','jumlah_beli','
    						harga_beli','harga_jual'];

    	public function books()
    	{
    		return $this->hasMany('App\Penjualan');
    	}
}
