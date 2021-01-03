@extends('layouts.dashboard')
@section('content')

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-weight: bold;">Form Ubah Data Profil Pemain</h3>
            </div>
            <div class="col-md-6">
                <p class="text-right"><a href="{{route('profile.index')}}" class="btn btn-secondary">Kembali</a></p>
            </div>
        </div>
        <!-- Content Row -->
        <form method="POST" action="{{route('profile.update', $profiles->id_pemain)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{$profiles->nama}}" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemain" name="nama" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input value="{{$profiles->umur}}" type="text" class="form-control" id="umur" placeholder="Masukkan Umur Pemain" name="umur" required>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi</label>
                <input value="{{$profiles->tinggi}}" type="text" class="form-control" id="tinggi" placeholder="Masukkan tinggi Pemain" name="tinggi" required>
            </div>
            <div class="form-group">
                <label for="nama">Berat</label>
                <input value="{{$profiles->berat}}" type="text" class="form-control" id="berat" placeholder="Masukkan berat Pemain" name="berat" required>
            </div>
            <div class="form-group">
                <label for="nama">Posisi</label>
                <select class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi" required>
                    @if($profiles->posisi !=null)
                    <option value="{{$profiles->posisi}}" selected>{{$profiles->posisi}}</option>
                    @else
                    <option value="" disabled selected>Pilih Posisi</option>
                    @endif
                    <option value="Point Guard">Point Guard</option>
                    <option value="Shooting Guard">Shooting Guard</option>
                    <option value="Small Guard">Small Forward</option>
                    <option value="Power Forward">Power Forward</option>
                    <option value="Center">Center</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input value="{{$profiles->tanggal_lahir}}" type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Pemain" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="nomor_punggung">Nomor Punggung</label>
                <input value="{{$profiles->nomor_punggung}}" type="text" class="form-control" id="nomor_punggung" placeholder="Masukkan Nomor Punggung Pemain" name="nomor_punggung" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <img src="{{ asset('upload/profiles/'.$profiles->foto) }}" alt="Image" width="200px" height="auto" />
                <input value="{{$profiles->foto}}" type="file" class="form-control" id="foto" placeholder="Masukkan Foto Pemain" name="foto">
                <input type="hidden" name="hidden_image" value="{{$profiles->foto}}">
            </div>
            <button class="btn btn-success float-right mb-5" type="submit" name="edit" value="Edit">Ubah Data Pemain</button>
        </form>
    </div>
</body>

@endsection