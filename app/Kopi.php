<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kopi extends Model
{
    public $table = 'kopis';
	
	protected $fillable = [
		'jenis_kopi', 'merk_kopi', 'stok', 'harga'
	];
}
