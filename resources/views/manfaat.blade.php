@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><i class="oi oi-plus"></i> Manfaat Teh dan Kopi</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                    <h3><i class="oi oi-plus"></i> Manfaat Teh </h3>
                    <img src="{{ asset('/images/manfaatteh.jpg') }}"><br>
                    <p> Minum teh biasanya sering dilakukan oleh kebanyakan orang di pagi hari. Tidak hanya orang dewasa saja, biasanya ha ini dilakukan oleh anak-anak juga. Biasanya mereka minum teh saat santai pagi, mau berangkat kerja, ataupun berangkat ke sekolah. Karena minum teh di pagi hari akan membuat kamu semangat untuk bekatifitas. Tetapi hal ini tidak hanya diakukan di pagi hari, kadang mereka melakukannya saat sore ataupun malam. Tetapi tahukah kalian bahwa minum teh juga bermanfaat untuk kesehatan kamu? buat kamu yang belum tahu, ini ada beberapa penjelasan manfaat minum teh untuk kesehatan kamu, antara lain : </p>

                    <p>1. Mencegah Kanker Payudara</p>
                    <p>Bagi seorang wanita penyakit kanker payudara adaah penyakit yang angat menakutkan. Hal ini bisa terjadi karena pola hidupyang tidak sehat, dan lifestyle yang tidak sesuai dengan anjuran ahli kesehatan membuat penyakit ini rentan diderita oleh kaum muda. Kamu bisa mengurangi resiko terkena kanker payudara dengan rutin mengkonsumsi teh hijau. Hal ini karena dalam teh hijau mengandung poifenol yang tinggi.</p>

                    <p>2. Mencegah Stroke</p>
                    <p>Biasanya penyakit stroke diderita oleh orang yang lanjut usia, tetapi kadang ada pula stroke yang menyerang usia muda. Kamu bisa mengkonsumsi teh tiga kali sehari untuk mengurangi resiko terkena stroke. Tetapi kamu harus mengkonsumsi teh hijau atau pun teh hitam, jangan konsumsi teh yang sembarangan.</p>

                    <p>3. Menurunkan Tekanan Darah Tinggi</p>
                    <p>Tekanan darah tinggi mempunyai banyak faktor penyebab. Selain menghindari faktor penyebab darah tinggi, kamu juga bisa mengurangi resiko darah tinggi dengan mengkonsumsi teh. Karena didalam teh mengandung L-Theanine yang berfungsi untuk menghambat tekanan darah tinggi naik terlalu signifikan. </p>
                    <p> Sumber : <a href="http://www.tampilcantik.com/suka-minum-teh-manfaat-teh-untuk-kesehatan-yang-harus-kamu-tahu/">http://www.tampilcantik.com/suka-minum-teh-manfaat-teh-untuk-kesehatan-yang-harus-kamu-tahu/</a> </p>

                    <h3><i class="oi oi-plus"></i> Manfaat Kopi </h3>
                    <img src="{{ asset('/images/manfaatkopi.jpg') }}" width="50%"><br>
                    <p>Manfaat kopi ternyata memiliki sejumlah kandungan zat gizi baik bagi tubuh, bahkan diklaim menjadi salah satu fighter sejati untuk kanker. apakah benar?. Ekstrak biji tanaman kopi inilah yang diolah menjadi bubuk kopi yang sering kita nikmati. Kopi biasanya menjadi teman dikala memulai kegiatan dipagi hari. Minuman berwarna hitam pekat ini, menuguhkan cita rasa yang unik, tidak heran banyak orang yang memfavoritkan minuman. Di Indonesia sendiri banyak di daerah-daerah tertentu, minuman kopi menjadi sebuah tradisi yang unik.</p>

                    <p>Beberapa manfaat kopi bagi tubuh adalah sebagai berikut.Kenikmatan secangkir banyak orang yang mengaguminya, tapi dibalik nikmatnya kopi menyimpan beragam manfaat. Berikut manfaat kopi diantaranya adalah :</p>

                    <p>1. Meningkatkan stamina</p>
                    <p>Kopi memiliki kandungan zat kafein yang tinggi. Adenosin dalam tubuh bekerja sebagai sel yang menyebabkan rasa ingin tidur terhadap otak. Kafein dalam kopi mempengaruhi kinerja sel dan menjadikan pergerakannya lebih lambat.  Sehingga membuat perasaan segar lebih lama.</p>

                    <p>2. Mencegah kanker</p>
                    <p>Antioksidan pada kopi membantu menekan resiko gejala kanker pada tubuh. Penelitian di Jepang pada sejumlah wanita yang mengkonsumsi kopi 2 kali sehari, resiko terjadinya kanker usus besar menurun sebesar 25%.</p>

                    <p>3. Kopi menjaga kesehatan mulut</p>
                    <p>Kopi memiliki sifat anti bakteri yang baik bagi kebersihan mulut. Hal ini dapat membantu penyembuhan gigi berlubang, plak dan infeksi gusi. Tentu saja berpeluang besar untuk menekan resiko kanker mulut.</p>

                    <p> Sumber : <a href="https://eventkampus.com/blog/detail/1393/manfaat-kopi-bagi-kesehatan">https://eventkampus.com/blog/detail/1393/manfaat-kopi-bagi-kesehatan/</a> </p>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
