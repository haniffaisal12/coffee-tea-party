@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-info"></i> Tentang Teh dan Kopi</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                    <h3><i class="oi oi-info"></i> Sejarah Teh dan Kopi </h3>
                    <img src="{{ asset('/images/tehkopi.jpg') }}"><br>
                    <p> Menurut legenda, teh pertama kali ditemukan oleh Kaisar Cina pada 2737 SM saat tidak sengaja daun jatuh ke dalam air yang sedang ia didihkan. Kemudian, ia mencicipinya dan terkejut dengan rasa dan manfaat setelah mengkonsumsinya. Sementara kopi, diyakini berasal di dataran tinggi Ethiopia di mana sejarah mengatakan bahwa seorang pengembala kambing bernama Kaldi melihat kambingnya menjadi hiperaktif setelah makan buat dari suatu pohon yang kemudian dikenal sebagai bibit kopi. </p>
                    <p> Sumber : <a href="hellosehat.com">https://hellosehat.com/hidup-sehat/fakta-unik/lebih-sehat-teh-atau-kopi/</a> </p>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
