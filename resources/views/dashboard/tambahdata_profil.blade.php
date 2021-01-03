@extends('layouts.dashboard')

@section('title', 'Tambah Data Profile')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid bg-light mb-5">
    <div class="row">
        <div class="col-md-6">
            <h3 style="font-weight: bold;">Form Tambah Data Profil Pemain</h3>
        </div>
        <div class="col-md-6">
            <p class="text-right"><a href="{{route('profile.index')}}" class="btn btn-secondary">Kembali</a></p>
        </div>
    </div>
    <!-- Content Row -->
    <form method="POST" action="{{route('profile.store')}}" class="col-md-12" enctype="multipart/form-data">
        @csrf
        <div class=" form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" placeholder="Masukkan Umur">
            @error('umur')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tinggi">Tinggi Badan</label>
            <input type="text" class="form-control @error('tinggi') is-invalid @enderror" id="tinggi" name="tinggi" placeholder="Masukkan Tinggi Badan">
            @error('tinggi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="berat">Berat Badan</label>
            <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" placeholder="Masukkan Berat Badan">
            @error('berat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="posisi">Posisi</label>
            <select class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi">
                <option value="Point Guard">Point Guard</option>
                <option value="Shooting Guard">Shooting Guard</option>
                <option value="Small Guard">Small Forward</option>
                <option value="Power Guard">Power Forward</option>
                <option value="Center">Center</option>
            </select>
            @error('posisi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="datepicker">Tanggal Lahir</label>
            <input type="date" id="datepicker" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
            @error('tanggal_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nomor_punggung">No.Punggung</label>
            <input type="text" class="form-control @error('nomor_punggung') is-invalid @enderror" id="nomor_punggung" name="nomor_punggung" placeholder="Masukkan Nomor Punggung">
            @error('nomor_punggung')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto Pemain</label>
            <input type="file" accept=".png,.jpg,.jpeg" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror">
            @error('foto')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success float-right mb-5" type="submit" name="add" value="Add">Tambah Data Pemain</button>
    </form>
</div>
@endsection