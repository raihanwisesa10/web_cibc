@extends('layouts.dashboard')

@section('title', 'Activity Candramawa Indonesia')
@section('content')

<div class="container">
    <h3 class="text-center">Tabel Aktivitas Pemain</h3>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{route('activity.create')}}" class="btn btn-success mb-1" method="POST">Tambah Data Pemain</a>
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
                <td>{{$profile->nama}}</td>
                <td>{{$profile->point}}</td>
                <td>{{$profile->assist}}</td>
                <td>{{$profile->steal}}</td>
                <td>{{$profile->block}}</td>
                <td>{{$profile->rebound}}</td>
                <td>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-warning" href="{{route('activity.edit', $profile->id_pemain)}}">Edit</a>
                        </div>
                        <div class="col-md-6 ml-n3">
                            <form action="{{route('profile.destroy', $profile->id_pemain)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger inline-block">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection