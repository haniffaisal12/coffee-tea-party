<link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! asset('open-iconic/font/css/open-iconic-bootstrap.min.css') !!}">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-cart"></i> MANAJEMEN PRODUK TEH</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						@if(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
						@endif

						<h5> 
							<i class="oi oi-check"></i> <a href="{{ url('/teh/create') }}">Tambah Data</a> | 
							<i class="oi oi-circle-check"></i> <a href="{{ url('/kopi') }}">Lihat Data Kopi</a>
						 	<br><br>
						 	<form action="{{ url('teh/cari') }}" method="GET">
								<input type="text" name="cari" placeholder="Cari Merk Teh .." value="{{ old('cari') }}">
								<input type="submit" value="Search">
							</form>
						</h5>
						<table class="table table-bordered table-responsive table-striped">
							<tr class="table-primary">
								<th> <i class="oi oi-sort-descending"></i> No</th>
								<th> <i class="oi oi-signpost"></i> Jenis Teh</th>
								<th> <i class="oi oi-droplet"></i> Merk Teh</th>
								<th> <i class="oi oi-basket"></i> Stok</th>
								<th> <i class="oi oi-dollar"></i> Harga</th>
								<th> <i class="oi oi-command"></i> Aksi</th>
							</tr>
							@foreach ($teh as $row)
							<tr>
								<td align="center">{{ isset($i) ? ++$i : $i = 1 }}</td>
								<td align="center">{{ $row->jenis_teh }}</td>
								<td align="center">{{ $row->merk_teh }}</td>
								<td align="center">{{ $row->stok }}</td>
								<td align="center">Rp. {{ $row->harga }}</td>
								<td align="center">
									<a href="{{ url('/teh/' . $row->id . '/edit') }}">Edit</a><br>
									----------
									<form action="{{ url('/teh/' . $row->id) }}" method="POST">
										@method('DELETE')
										@csrf
										<button type="submit">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						<table>
               
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection