@extends('layouts.dashboard')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <h3>Form Tambah Data Pemain</h3>
    <!-- Content Row -->
    <form method="POST" action="/dashboard/profile" class="col-md-6">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Umur</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Umur">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Tinggi Badan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tinggi Badan">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Berat Badan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Berat Badan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Posisi</label>
            <select class="form-control" id="exampleFormControlSelect1">
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
            <label for="formGroupExampleInput">Tanggal Lahir</label>
            <input type="text" id="datepicker">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">No.Punggung</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan No.Punggung">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Foto Pemain</label>
            <form action="/action_page.php">
                <input type="file" id="myFile" name="filename">
                <input type="submit">
            </form>
        </div>
        <div class="row">
            <button class="btn btn-success" type="submit">Tambah Data Pemain</button>
            <a href="{{url('dashboard/profile')}}">Kembali</a>
        </div>

    </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('login')}}">Logout</a>
            </div>
        </div>
    </div>
</div>
</body>

@endsection