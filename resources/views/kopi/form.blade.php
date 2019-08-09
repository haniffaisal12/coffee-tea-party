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
                    <h1><i class="oi oi-cart"></i> FORM PRODUK KOPI</h1>
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

					<form action="{{ url('kopi', @$kopi->id) }}" method="POST">
						@csrf
						
						@if(!empty($kopi))
							@method('PATCH')
						@endif

						<div class="form-group">
							<label for="jenis_kopi">Jenis Kopi</label>
							<div class="input"><input type="text" name="jenis_kopi" value="{{ old('jenis_kopi', @$kopi->jenis_kopi) }}"></div>
						</div>

						<div class="form-group">
							<label for="merk_kopi">Merk Kopi</label>
							<div class="input"><input type="text" name="merk_kopi" value="{{ old('merk_kopi', @$kopi->merk_kopi) }}"></div>
						</div>

						<div class="form-group">
							<label for="stok">Stok</label>
							<div class="input"><input type="text" name="stok" value="{{ old('stok', @$kopi->stok) }}"></div>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<div class="input"><input type="text" name="harga" value="{{ old('harga', @$kopi->harga) }}"></div>
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

