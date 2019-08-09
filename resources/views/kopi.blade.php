<link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! asset('open-iconic/font/css/open-iconic-bootstrap.min.css') !!}">

@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-cart"></i> PRODUK KOPI</h1>
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
							<i class="oi oi-circle-check"></i> <a href="{{ url('/produk/teh') }}">Lihat Data Teh</a>
							<br><br>
							 <form action="{{ url('/produk/kopi/cari') }}" method="GET">
									<input type="text" name="cari" placeholder="Cari Merk Kopi .." value="{{ old('cari') }}">
									<input type="submit" value="Search">
							</form>
						</h5>
						<table class="table table-bordered table-responsive table-striped">
							<tr class="table-primary">
								<th> <i class="oi oi-sort-descending"></i> No</th>
								<th> <i class="oi oi-signpost"></i> Jenis Kopi</th>
								<th> <i class="oi oi-droplet"></i> Merk Kopi</th>
								<th> <i class="oi oi-basket"></i> Stok</th>
								<th> <i class="oi oi-dollar"></i> Harga</th>
							</tr>
							@foreach ($kopi as $row)
							<tr>
								<td align="center">{{ isset($i) ? ++$i : $i = 1 }}</td>
								<td align="center">{{ $row->jenis_kopi }}</td>
								<td align="center">{{ $row->merk_kopi }}</td>
								<td align="center">{{ $row->stok }}</td>
								<td align="center">Rp. {{ $row->harga }}</td>
							</tr>
							@endforeach
						<table>
               
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection