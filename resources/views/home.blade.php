@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-dashboard"></i> DASHBOARD ADMIN</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                    <h3><i class="oi oi-eyedropper"></i> <a href="{{ url('/teh') }}">Manajemen Produk Teh</a></h3>
                    <h3><i class="oi oi-fire"></i> <a href="{{ url('/kopi') }}">Manajemen Produk Kopi</a></h3>
               
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
