<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TehController extends Controller
{
    public function index()
	{
		$data['teh'] = \App\Teh::orderBy('id')->get();
		return view('teh.index', $data );
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$data['teh'] = \App\Teh::orderBy('id')->where('merk_teh','like',"%".$cari."%")->get();
		return view('teh.index', $data);
	}
	
	public function create()
	{
		return view('teh.form');
	}
	
	public function store(Request $request)
	{
		$rule = [
			'jenis_teh' => 'required|string',
			'merk_teh' => 'required|string',
			'stok' => 'required|integer',
			'harga' => 'required|integer',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();

		$teh = new \App\Teh;
		$teh->jenis_teh = $input['jenis_teh'];
		$teh->merk_teh = $input['merk_teh'];
		$teh->stok = $input['stok'];
		$teh->harga = $input['harga'];
		$status = $teh->save();
		
		if($status) {
			return redirect('/teh')->with('success', 'Data Berhasil Ditambahkan');
		} else {
			return redirect('/teh')->with('error', 'Data Gagal Ditambahkan');
		}
	}
	
	public function edit(Request $request, $id)
	{
		$data['teh'] = \App\Teh::find($id);
		return view('teh.form', $data);
	}
	
	public function update(Request $request, $id)
	{
		$rule = [
			'jenis_teh' => 'required|string',
			'merk_teh' => 'required|string',
			'stok' => 'required|integer',
			'harga' => 'required',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();

		$teh = \App\Teh::find($id);
		$teh->jenis_teh = $input['jenis_teh'];
		$teh->merk_teh = $input['merk_teh'];
		$teh->stok = $input['stok'];
		$teh->harga = $input['harga'];
		$status = $teh->update();
		
		if($status) {
			return redirect('/teh')->with('success', 'Data Berhasil Diubah');
		} else {
			return redirect('/teh/create')->with('error', 'Data Gagal Diubah');
		}
	}
	
	public function destroy(Request $request, $id)
	{
		$teh = \App\Teh::find($id);
		$status = $teh->delete();

		if($status) {
			return redirect('/teh')->with('success', 'Data Berhasil Dihapus');
		} else {
			return redirect('/teh/create')->with('error', 'Data Gagal Dihapus');
		}
	}
}
