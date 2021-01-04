@extends('layouts.app')

@section('title', 'Homepage Candramwa Indonesia')
@section('content')
<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">Candramawa Indonesia</h1>
            <h2 class="masthead-subheading mb-0">Basketball Club</h2>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{url('img/img1-min.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Candramawa Indonesia Basketball Club</h2>
                    <p style="font-size: large;">Visi kami adalah mengembangkan potensi pemain bola basket di Kota Depok agar dapat bersaing di tingkat yang lebih tinggi</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{url('img/img2-min.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4 text-right">Materi yang berfokus pada Dribbling dan Shooting</h2>
                    <p class="text-right" style="font-size: large;">Karen Dribbling dan Shooting merupakan hal fundamental yang perlu dikuasai oleh pemain untuk mencetak skor dalam pertandingan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=" container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{url('img/img3-min.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Jadwal dan Tempat Latihan</h2>
                    <p style="font-size: large;">Latihan kami diadakan pada:</p>
                    <p style="font-size: large;">Setiap Sabtu, Jam 10.00 - 12.00</p>
                    <p style="font-size: large;">Di GOR FORTUNA Cilodong</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection