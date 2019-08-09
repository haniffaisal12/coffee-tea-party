@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-phone"></i> Kontak Kami</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                    <h1>Faisal Hanif Arifin - 10516194</h1>
                    <h4> <i class="oi oi-phone"></i> 085861988937 </h4>
                    <h4> <i class="oi oi-camera-slr"></i> IG : @haniffaisal12 </h4>

                    <br><br>

                    <h1>Rian Herdiansyah - 10516191</h1>
                    <h4> <i class="oi oi-phone"></i> 081323444436 </h4>
                    <h4> <i class="oi oi-camera-slr"></i> IG : @rianherdiansyah_ </h4>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
