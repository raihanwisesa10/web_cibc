@extends('layouts.app')

@section('content')

<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="#" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('player') }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection