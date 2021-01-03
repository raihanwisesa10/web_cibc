@extends('layouts.dashboard')

@section('title', 'Ubah Data Aktivitas')
@section('content')

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-weight: bold;">Form Ubah Data Aktivitas Pemain</h3>
            </div>
            <div class="col-md-6">
                <p class="text-right"><a href="{{route('activity.index')}}" class="btn btn-secondary">Kembali</a></p>
            </div>
        </div>
        <!-- Content Row -->
        <form method="POST" action="{{route('activity.update', $activity[0]->id_pemain)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="hidden" name="id_pemain" value="{{$activity[0]->id_pemain}}">
                <input value="{{$activity[0]->nama}}" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemain" name="nama" readonly>
            </div>
            <div class="form-group">
                <label for="point">Point</label>
                <input value="{{$activity[0]->point}}" type="text" class="form-control" id="point" placeholder="Masukkan Total Point Pemain" name="point">
            </div>
            <div class="form-group">
                <label for="assist">Assist</label>
                <input value="{{$activity[0]->assist}}" type="text" class="form-control" id="assist" placeholder="Masukkan Total Assist Pemain" name="assist">
            </div>
            <div class="form-group">
                <label for="steal">Steal</label>
                <input value="{{$activity[0]->steal}}" type="text" class="form-control" id="steal" placeholder="Masukkan Total Steal Pemain" name="steal">
            </div>
            <div class="form-group">
                <label for="block">Block</label>
                <input value="{{$activity[0]->block}}" type="text" class="form-control" id="block" placeholder="Masukkan Total Block Pemain" name="block">
            </div>
            <div class="form-group">
                <label for="rebound">Rebound</label>
                <input value="{{$activity[0]->rebound}}" type="text" class="form-control" id="rebound" placeholder="Masukkan Total Rebound Pemain" name="rebound">
            </div>
            <button class="btn btn-success float-right mb-5" type="submit">Ubah Data Pemain</button>

        </form>
    </div>

</body>

@endsection