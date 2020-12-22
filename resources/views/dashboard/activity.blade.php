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



@endsection