@extends('layouts.dashboard')
@section('content')

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
        <div class="container-fluid bg-light mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="font-weight: bold;">Form Tambah Data Pemain</h3>
                </div>
                <div class="col-md-6">
                    <p class="text-right"><a href="{{route('activity.index')}}" class="btn btn-secondary">Kembali</a></p>
                </div>
            </div>
            <!-- Content Row -->
            <form method="POST" action="{{route('activity.store')}}">
                @csrf
                <div class="form-group">
                    <label for="id_pemain">Nama</label>
                    <select class="form-control @error('id_pemain') is-invalid @enderror" id="id_pemain" name="id_pemain">
                        @foreach($profiles as $profile)
                        <option value="{{$profile->id_pemain}}">{{$profile->nama}}</option>
                        @endforeach
                    </select>
                    @error('id_pemain')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="point">Point</label>
                    <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" placeholder="Masukkan Total Point Pemain" name="point" value="{{ old('point') }}">
                    @error('point')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="assist">Assist</label>
                    <input type="text" class="form-control @error('assist') is-invalid @enderror" id="assist" placeholder="Masukkan Total Assist Pemain" name="assist" value="{{ old('assist') }}">
                    @error('assist')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Steal</label>
                    <input type="steal" class="form-control @error('steal') is-invalid @enderror" id="steal" placeholder="Masukkan Total Steal Pemain" name="steal" value="{{ old('steal') }}">
                    @error('steal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Block</label>
                    <input type="block" class="form-control @error('block') is-invalid @enderror" id="block" placeholder="Masukkan Total Block Pemain" name="block" value="{{ old('block') }}">
                    @error('block')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rebound">Rebound</label>
                    <input type="text" class="form-control @error('block') is-invalid @enderror" id="rebound" placeholder="Masukkan Total Rebound Pemain" name="rebound" value="{{ old('rebound') }}">
                    @error('block')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-success float-right mb-5" type="submit" name="add" value="Add">Tambah Data Pemain</button>
            </form>
        </div>



</body>

@endsection