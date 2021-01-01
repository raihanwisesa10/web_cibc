@extends('layouts.dashboard')
@section('content')

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h3>Form Ubah Data Aktivitas Pemain</h3>
        <!-- Content Row -->
        <form method="POST" action="{{route('activity.update', $activity->id_pemain)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{$activity->nama}}" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemain" name="nama">
            </div>
            <div class="form-group">
                <label for="point">Point</label>
                <input value="{{$activity->point}}" type="text" class="form-control" id="point" placeholder="Masukkan Total Point Pemain" name="point">
            </div>
            <div class="form-group">
                <label for="assist">Assist</label>
                <input value="{{$activity->assist}}" type="text" class="form-control" id="assist" placeholder="Masukkan Total Assist Pemain" name="assist">
            </div>
            <div class="form-group">
                <label for="steal">Steal</label>
                <input value="{{$activity->steal}}" type="text" class="form-control" id="steal" placeholder="Masukkan Total Steal Pemain" name="steal">
            </div>
            <div class="form-group">
                <label for="block">Block</label>
                <input value="{{$activity->block}}" type="text" class="form-control" id="block" placeholder="Masukkan Total Block Pemain" name="block">
            </div>
            <div class="form-group">
                <label for="rebound">Rebound</label>
                <input value="{{$activity->rebound}}" type="text" class="form-control" id="rebound" placeholder="Masukkan Total Rebound Pemain" name="rebound">
            </div>
            <div class="row">
                <button class="btn btn-success" type="submit">Ubah Data Pemain</button>
                <a href="{{route('activity.index')}}">Kembali</a>
            </div>

        </form>
    </div>

</body>

@endsection