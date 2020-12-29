@extends('layouts.dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
        <h3 class="text-center">Profile Pemain Candramawa Indonesia</h3>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <a href="{{route('profile.create')}}" class="btn btn-success mb-1" method="POST">Tambah Data Pemain</a>
        <table class=" table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Tinggi</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nomor Punggung</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                <tr>
                    <td>{{$profile->nama}}</td>
                    <td>{{$profile->umur}}</td>
                    <td>{{$profile->tinggi}}</td>
                    <td>{{$profile->berat}}</td>
                    <td>{{$profile->posisi}}</td>
                    <td>{{$profile->tanggal_lahir}}</td>
                    <td>{{$profile->nomor_punggung}}</td>
                    <td><img src="{{ asset('upload/profiles/'.$profile->foto) }}" alt="Image" width="100px" height="auto"></td>
                    <td>
                        <a class="btn btn-warning" href="{{route('profile.edit', $profile->id_pemain)}}">Edit</a>
                        <form action="{{route('profile.destroy', $profile->id_pemain)}}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger inline-block">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection