<link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! asset('open-iconic/font/css/open-iconic-bootstrap.min.css') !!}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-cart"></i> FORM PRODUK TEH</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
				</div>

					@if(session('error'))
					<div class="alert alert-error">
						{{ session('error') }}
					</div>
					@endif

					@if(count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Perhatian</strong>
						<br />
						<ul>
							@foreach ($errors->all () as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<form action="{{ url('teh', @$teh->id) }}" method="POST">
						@csrf
						
						@if(!empty($teh))
							@method('PATCH')
						@endif

						<div class="form-group">
							<label for="jenis_teh">Jenis Teh</label>
							<div class="input"><input type="text" name="jenis_teh" value="{{ old('jenis_teh', @$teh->jenis_teh) }}"></div>
						</div>

						<div class="form-group">
							<label for="merk_teh">Merk Teh</label>
							<div class="input"><input type="text" name="merk_teh" value="{{ old('merk_teh', @$teh->merk_teh) }}"></div>
						</div>

						<div class="form-group">
							<label for="stok">Stok</label>
							<div class="input"><input type="text" name="stok" value="{{ old('stok', @$teh->stok) }}"></div>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<div class="input"><input type="text" name="harga" value="{{ old('harga', @$teh->harga) }}"></div>
						</div>
						
						<div class="form-group">
							<input type="submit" value="Simpan" class="tombol simpan">
							<input type="reset" value="Batal" class="tombol reset">
						</div>
					</form>

             </div>
        </div>
     </div>
</div>
@endsection

