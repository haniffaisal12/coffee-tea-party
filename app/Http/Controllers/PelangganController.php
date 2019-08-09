<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
	public function tentang()
	{
		return view('tentang');
	}

	public function produk()
	{
		return view('produk');
	}

	public function manfaat()
	{
		return view('manfaat');
	}

	public function kontak()
	{
		return view('kontak');
	}

	public function indexteh()
	{
		$data['teh'] = \App\Teh::orderBy('id')->get();
		return view('teh', $data);
	}
	
	public function cariteh(Request $request)
	{
		$cari = $request->cari;
		$data['teh'] = \App\Teh::orderBy('id')->where('merk_teh','like',"%".$cari."%")->get();
		return view('teh', $data);
	}

    public function indexkopi()
	{
		$data['kopi'] = \App\Kopi::orderBy('id')->get();
		return view('kopi', $data);
	}
	
	public function carikopi(Request $request)
	{
		$cari = $request->cari;
		$data['kopi'] = \App\Kopi::orderBy('id')->where('merk_kopi','like',"%".$cari."%")->get();
		return view('kopi', $data);
	}
}
