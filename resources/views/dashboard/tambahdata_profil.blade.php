@extends('layouts.dashboard')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <h3>Form Tambah Data Pemain</h3>
    <!-- Content Row -->
    <form method="POST" action="#" class="col-md-6">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Tinggi Badan</label>
            <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="Masukkan Tinggi Badan">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Berat Badan</label>
            <input type="text" class="form-control" id="berat" name="berat" placeholder="Masukkan Berat Badan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Posisi</label>
            <select class="form-control" id="posisi" name="posisi">
                <option>Point Guard</option>
                <option>Shooting Guard</option>
                <option>Small Forward</option>
                <option>Power Forward</option>
                <option>Center</option>
            </select>
        </div>
        <div class="form-group">
            <!-- <label for="formGroupExampleInput">Tanggal Lahir</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tanggal Lahir"> -->
            <label for="datepicker">Tanggal Lahir</label>
            <input type="date" id="datepicker" name="tanggal_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">No.Punggung</label>
            <input type="text" class="form-control" id="nomor_punggung" name="nomor_punggung" placeholder="Masukkan No.Punggung">
        </div>
        <div class="form-group">
            <label for="foto">Foto Pemain</label>
            <input type="file" accept=".png,.jpg,.jpeg" name="foto" id="foto" class="form-control">
        </div>
        <div class="row">
            <button class="btn btn-success" type="submit">Tambah Data Pemain</button>
            <a href="{{url('dashboard/profile')}}">Kembali</a>
        </div>

    </form>
</div>



@endsection