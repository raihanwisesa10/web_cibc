@extends('layouts.dashboard')
@section('content')

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
            @foreach ($profiles as $profile)
            <tr>

                <td>{{$act->nama}}</td>
                <td>{{$act->point}}</td>
                <td>{{$act->assist}}</td>
                <td>{{$act->steal}}</td>
                <td>{{$act->block}}</td>
                <td>{{$act->rebound}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('activity.edit', $act->id_pemain)}}">Edit</a>
                    <form action="{{route('activity.destroy', $act->id_pemain)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection