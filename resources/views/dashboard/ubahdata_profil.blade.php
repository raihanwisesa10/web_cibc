@extends('layouts.dashboard')
@section('content')

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h3>Form Ubah Data Profil Pemain</h3>
        <!-- Content Row -->
        <form method="POST" action="{{url('update', $profiles->id_pemain)}}">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{$profiles->nama}}" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemain" name="nama">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input value="{{$profiles->point}}" type="text" class="form-control" id="point" placeholder="Masukkan Total Point Pemain" name="point">
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi</label>
                <input value="{{$profiles->tinggi}}" type="text" class="form-control" id="tinggi" placeholder="Masukkan Total tinggi Pemain" name="tinggi">
            </div>
            <div class="form-group">
                <label for="nama">Berat</label>
                <input value="{{$profiles->berat}}" type="text" class="form-control" id="berat" placeholder="Masukkan Total berat Pemain" name="berat">
            </div>
            <div class="form-group">
                <label for="nama">Posisi</label>
                <input value="{{$profiles->posisi}}" type="text" class="form-control" id="posisi" placeholder="Masukkan posisi Pemain" name="posisi">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input value="{{$profiles->tanggal_lahir}}" type="text" class="form-control" id="tanggal_lahir" placeholder="Masukkan  Tanggal Lahir Pemain" name="anggal_ahir">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input value="{{$profiles->foto}}" type="text" class="form-control" id="foto" placeholder="Masukkan Foto Pemain" name="foto">
            </div>
            <div class="row">
                <button class="btn btn-success" type="submit">Ubah Data Pemain</button>
            </div>

        </form>
    </div>

</body>

@endsection