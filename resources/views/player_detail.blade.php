@extends('layouts.app')

@section('title', 'Player Detail Candramawa Indonesia')
@section('content')
<div class="col-md-12 bg-light" style="margin-bottom: 100px;">
    <div class="sportsmagazine-fancy-title" style=" padding-top: 100px;">

    </div>
    <div class="player-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 p-0">
                    <img src="{{url('upload/profiles')}}/{{$datas[0]->foto}}" class="w-100" style="width: 50px; height: 400px;">
                </div>
                <div class="col-md-9 mb-n3 info-player">
                    <table class="table bg-light text-black" style="width: 100%; margin-top: 0px; font-size: 16.3pt; bottom: 0;">
                        <tbody>
                            <tr>
                                <td style="width: 250px;">Nama</td>
                                <td>:</td>
                                <td>{{$datas[0]->nama}}</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{$datas[0]->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Umur</td>
                                <td>:</td>
                                <td>{{$datas[0]->umur}} Tahun</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Tinggi</td>
                                <td>:</td>
                                <td>{{$datas[0]->tinggi}} cm</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Berat</td>
                                <td>:</td>
                                <td>{{$datas[0]->berat}} kg</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Posisi</td>
                                <td>:</td>
                                <td>{{$datas[0]->posisi}}</td>
                            </tr>
                            <tr>
                                <td style="width: 250px;">Nomor Punggung</td>
                                <td>:</td>
                                <td>{{$datas[0]->nomor_punggung}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="tab-content">
        <div class="tab-pane active" id="currentSeason">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="margin-bottom: 0">
                    <thead class="black white-text">
                        <tr class="footable-header  font-20">
                            <th>Point</th>
                            <th>Assist</th>
                            <th>Steal</th>
                            <th>Block</th>
                            <th>Rebound</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$datas[0]->point}}</td>
                            <td>{{$datas[0]->assist}}</td>
                            <td>{{$datas[0]->steal}}</td>
                            <td>{{$datas[0]->block}}</td>
                            <td>{{$datas[0]->rebound}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ route('players') }}" class="btn btn-success float-right col-md-3 mt-4"> Kembali </a>
</div>
@endsection