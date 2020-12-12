@extends('layouts.dashboard')
@section('content')


<!-- End of Topbar -->

<div class="container">
    <h3 class="text-center">Tabel Aktivitas Pemain</h3>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Point</th>
                <th scope="col">Assist</th>
                <th scope="col">Steal</th>
                <th scope="col">Block</th>
                <th scope="col">Rebound</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activity as $act)
            <tr>
                <th scope="row">{{$act->id_pemain}}</th>
                <td>{{$act->nama}}</td>
                <td>{{$act->point}}</td>
                <td>{{$act->assist}}</td>
                <td>{{$act->steal}}</td>
                <td>{{$act->block}}</td>
                <td>{{$act->rebound}}</td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete',array($act->id_pemain))}}">Delete</a>
                    <a class="btn btn-warning" href="{{url('edit',array($act->id_pemain))}}">Edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
                <a class="btn btn-primary" href="#">Logout</a>
            </div>
        </div>
    </div>
</div>

@endsection