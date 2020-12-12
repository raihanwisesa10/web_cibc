@extends('layouts.app')

@section('content')
<!-- Page Content -->
<!-- Header -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item ">
            <img src="{{url('img/1-min.jpg')}}" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="{{url('img/2-min.jpg')}}" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('img/semi final basket 1-min.jpg')}}" class="d-block w-100 img-fluid" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid">

    <div class="mt-4">
        <div class="col-md-12 mb-5 text-center">
            <h2>Candramawa Indonesia</h2>
            <hr>
            <p>Merupakan Club Bola Basket yang berdomisili di Kota Depok yang berfokus pada teknik dribble dan shooting</p>
            <p>Candramawa Indonesia membuka kelas untuk kelompok umur 12,14,16,18 tahun</p>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container mt-3 mb-3">
        <h1 class="text-center mb-4 pt-3">Our Popular Players </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('img/andy.PNG')}}" class="card-img-top" width="200px" alt="Andy">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('img/niluh.png')}}" class="card-img-top " width="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('img/ilma.png')}}" class="card-img-top" width="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-1 mb-3">
        <p class="text-right pb-3" style="font-size: 15pt; margin-right: 120px;"><a href="{{ route('profiles') }}" style="text-decoration: none;"> view more >>> </a></p>
    </div>
</div>

</div>
<!-- /.row -->
@endsection