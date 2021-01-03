@extends('layouts.app')

@section('content')
<div class="col-md-12 bg-light" style="margin-bottom: 100px;">
    <div class="sportsmagazine-fancy-title" style=" padding-top: 100px;">
        <h2>{{$datas[0]->nama}}</h2>
    </div>
    <div class="player-detail">
        <div class="row m-0">
            <div class="col-xs-4 p-0">
                <img src="{{url('upload/profiles')}}/{{$datas[0]->foto}}" class="w-100" height="200" width="200">
            </div>
            <div class="col-xs-8 mb-10 info-player">
                <ul style="margin-top: 30px;">
                    <li>
                        <span class="info-header">Born</span>
                        <span class="info-desc"> {{$datas[0]->tanggal_lahir}} </span>
                    </li>
                    <li>
                        <span class="info-header">Age</span>
                        <span class="info-desc"> {{$datas[0]->umur}} </span>
                    </li>
                    <li>
                        <span class="info-header">Height</span>
                        <span class="info-desc">{{$datas[0]->tinggi}}</span>
                    </li>
                    <li>
                        <span class="info-header">Weight</span>
                        <span class="info-desc">{{$datas[0]->berat}} </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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