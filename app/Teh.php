<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teh extends Model
{
    public $table = 'teh';
	
	protected $fillable = [
		'jenis_teh', 'merk_teh', 'stok', 'harga'
	];
}
