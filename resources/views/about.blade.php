@extends('layouts.app')

@section('title', 'About Candramawa Indonesia')
@section('content')

<div class="container" style="margin-top: 80px;  margin-bottom: 80px;">
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="{{url('img/Logo Candramawa.PNG')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4 text-right">Candramawa Indonesia Basketball Club</h2>
                        <p class="text-right">Klub Bola Basket yang berdomisili di Kota Depok, Klub ini berdiri pada tahun 2020 dan mempunyai tim dengan katergori umur 14,16, dan 18 tahun putra dan putri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection