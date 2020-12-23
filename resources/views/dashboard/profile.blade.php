@extends('layouts.dashboard')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container">
        <h3 class="text-center">Tabel Aktivitas Pemain</h3>
        <a href="{{route('profile.create')}}" class="btn btn-success mb-1">Tambah Data Pemain</a>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Tinggi</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Tanggal_Lahir</th>
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
                    <td><img src="{{ asset('uploads/profiles/'.$profile->foto) }}" alt="Image" width="200px" height="auto" /></td>
                    <td>
                        <a class="btn btn-danger" href="{{url('delete',array($profile->id_pemain))}}">Delete</a>
                        <a class="btn btn-warning" href="{{url('edit',array($profile->id_pemain))}}">Edit</a>
                        <!-- <a class="btn btn-danger" href="{{route('profile.destroy'), $profile->id_pemain}}">Delete</a>
                        <a class="btn btn-warning" href="{{route('profile.edit'), $profile->id_pemain}}">Edit</a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
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

@endsection