<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['id_penjualan','barang_id','nama_barang','satuan','
    						jumlah_beli'];

    	public function author()
    	{
    		return $this->belongsTo('App\Barang');
    	}
}
