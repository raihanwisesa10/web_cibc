@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 100px;  margin-bottom: 20px;">
    <h3 class="text-center">Candramawa Players</h3>
    <div class="row">
        @foreach($profiles as $profile)
        <div class="col-md-4 mb-2 mt-3">
            <div class="card">
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
</div>
@endsection