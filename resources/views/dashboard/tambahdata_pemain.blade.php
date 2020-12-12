@extends('layouts.dashboard')
@section('content')

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h3>Form Tambah Data Aktivitas Pemain</h3>
        <!-- Content Row -->
        <form method="POST" action="/dashboard/activity">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukkan Nama Pemain" name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Point</label>
                <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" placeholder="Masukkan Total Point Pemain" name="point" value="{{ old('point') }}">
                @error('point')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Assist</label>
                <input type="text" class="form-control @error('assist') is-invalid @enderror" id="assist" placeholder="Masukkan Total Assist Pemain" name="assist" value="{{ old('assist') }}">
                @error('assist')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Steal</label>
                <input type="text" class="form-control @error('steal') is-invalid @enderror" id="steal" placeholder="Masukkan Total Steal Pemain" name="steal" value="{{ old('steal') }}">
                @error('steal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Block</label>
                <input type="text" class="form-control @error('block') is-invalid @enderror" id="block" placeholder="Masukkan Total Block Pemain" name="block" value="{{ old('block') }}">
                @error('block')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Rebound</label>
                <input type="text" class="form-control @error('block') is-invalid @enderror" id="rebound" placeholder="Masukkan Total Rebound Pemain" name="rebound" value="{{ old('rebound') }}">
                @error('block')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <button class="btn btn-success" type="submit">Tambah Data Pemain</button>
            </div>

        </form>
    </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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