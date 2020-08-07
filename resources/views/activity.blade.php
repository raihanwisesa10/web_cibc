@extends('layouts.app')

@section('content')

<div class="container">

    <h3 class="text-center">Tabel Aktivitas Pemain</h3>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Point</th>
                <th scope="col">Assist</th>
                <th scope="col">Steal</th>
                <th scope="col">Block</th>
                <th scope="col">Rebound</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection