@extends('layouts.dashboard')

@section('title', 'Profile Candramawa Indonesia')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <div class="container"> -->
    <h3 class="text-center">Profile Pemain Candramawa Indonesia</h3>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{route('profile.create')}}" class="btn btn-success mb-3" method="POST">Tambah Data Pemain</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="font-19">
                <th style="font-size: 10pt;">Nama</th>
                <th style="font-size: 10pt;">Umur</th>
                <th style="font-size: 10pt;">Tinggi</th>
                <th style="font-size: 10pt;">Berat</th>
                <th style="font-size: 10pt;">Posisi</th>
                <th style="font-size: 10pt;">Tanggal Lahir</th>
                <th style="font-size: 10pt;">Nomor Punggung</th>
                <th style="font-size: 10pt;">Foto</th>
                <th style="font-size: 10pt;">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($profiles as $profile)
            <tr>
                <td>{{$profile->nama}}</td>
                <td>{{$profile->umur}} thn</td>
                <td>{{$profile->tinggi}} cm</td>
                <td>{{$profile->berat}} kg</td>
                <td>{{$profile->posisi}}</td>
                <td>{{$profile->tanggal_lahir}}</td>
                <td>{{$profile->nomor_punggung}}</td>
                <td><img src="{{ asset('upload/profiles/'.$profile->foto) }}" alt="Image" width="80px" height="auto"></td>
                <td>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-warning" href="{{route('profile.edit', $profile->id_pemain)}}">Edit</a>
                        </div>
                        <div class="col-md-6 ml-n3">
                            <form action="{{route('profile.destroy', $profile->id_pemain)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger inline-block">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <!-- </div> -->
</div>
@endsection