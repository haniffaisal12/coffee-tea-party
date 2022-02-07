<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KopiController extends Controller
{
    public function index()
	{
		$data['kopi'] = \App\Kopi::orderBy('id')->get();
		return view('kopi.index', $data);
	}
	
	public function cari(Request $request)
	{
		$cari = $request->cari;
		$data['kopi'] = \App\Kopi::orderBy('id')->where('merk_kopi','like',"%".$cari."%")->get();
		return view('kopi.index', $data);
	}

	public function create()
	{
		return view('kopi.form');
	}
	
	public function store(Request $request)
	{
		$rule = [
			'jenis_kopi' => 'required|string',
			'merk_kopi' => 'required|string',
			'stok' => 'required|integer',
			'harga' => 'required|integer',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();

		$kopi = new \App\Kopi;
		$kopi->jenis_kopi = $input['jenis_kopi'];
		$kopi->merk_kopi = $input['merk_kopi'];
		$kopi->stok = $input['stok'];
		$kopi->harga = $input['harga'];
		$status = $kopi->save();
		
		if($status) {
			return redirect('/kopi')->with('success', 'Data Berhasil Ditambahkan !');
		} else {
			return redirect('/kopi')->with('error', 'Data Gagal Ditambahkan !');
		}
	}
	
	public function edit(Request $request, $id)
	{
		$data['kopi'] = \App\Kopi::find($id);
		return view('kopi.form', $data);
	}
	
	public function update(Request $request, $id)
	{
		$rule = [
			'jenis_kopi' => 'required|string',
			'merk_kopi' => 'required|string',
			'stok' => 'required|integer',
			'harga' => 'required',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();

		$kopi = \App\kopi::find($id);
		$kopi->jenis_kopi = $input['jenis_kopi'];
		$kopi->merk_kopi = $input['merk_kopi'];
		$kopi->stok = $input['stok'];
		$kopi->harga = $input['harga'];
		$status = $kopi->update();
		
		if($status) {
			return redirect('/kopi')->with('success', 'Data Berhasil Diubah');
		} else {
			return redirect('/kopi/create')->with('error', 'Data Gagal Diubah');
		}
	}
	
	public function destroy(Request $request, $id)
	{
		$kopi = \App\Kopi::find($id);
		$status = $kopi->delete();

		if($status) {
			return redirect('/kopi')->with('success', 'Data Berhasil Dihapus');
		} else {
			return redirect('/kopi/create')->with('error', 'Data Gagal Dihapus');
		}
	}
}
