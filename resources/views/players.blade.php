@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-3">
    <div class="row">
        @foreach($profiles as $profile)
        <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{url('upload/profiles')}}/{{$profile->foto}}" alt="Card image cap" width="250" height="400">
                <div class="card-body">
                    <h5 class="card-title">{{$profile->nama}}</h5>
                    <a href="{{ route('player_detail', $profile->id_pemain) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection