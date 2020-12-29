@extends('layouts.app')

@section('content')
<div class="col-md-8 bg-white pb-15">

    <!--  <div class="btn-group margin-bottom20">
                              <i class="arrow-select fa fa-caret-down"></i>
                              <select class="custom" name="season" id="id_season">
                                  <option value="1">IBL PERTAMAX PLAYOFFS 2018-2019</option>
                                  <option value="2">IBL PERTAMAX PLAYOFFS 2017-2018</option>
                              </select>
                            </div>
                            <div class="btn-group margin-bottom20">
                              <i class="arrow-select fa fa-caret-down"></i>
                              <select class="custom" name="year" id="id_year">
                                  <option value="2019">2019</option>
                                  <option value="1018">2018</option>
                                  <option value="2017">2017</option>
                              </select>
                            </div> -->

    <div class="sportsmagazine-fancy-title">
        <h2>PLAYERS</h2>
    </div>
    <div class="player-detail">
        <div class="row m-0">
            <div class="col-xs-4 p-0">
                <img src="https://img.wh.sportingpulseinternational.com/9a48509d8cf2840fb1f8288dd23a58ddS1.jpg" class="w-100">
            </div>
            <div class="col-xs-8 mb-10 info-player">
                <h4><strong>Alexander Franklyn</strong></h4>
                <!-- <p>Age : 0 Year</p>
                                  <p>Height : 180 cm</p>
                                  <p>Weight : 70 kg</p>
                                  <p>Team : Satya Wacana Salatiga</p> -->
                <ul>
                    <li>
                        <span class="info-header">Born</span>
                        <span class="info-desc"> - </span>
                    </li>
                    <li>
                        <span class="info-header">Age</span>
                        <span class="info-desc"> - </span>
                    </li>
                    <li>
                        <span class="info-header">Height</span>
                        <span class="info-desc">180 cm </span>
                    </li>
                    <li>
                        <span class="info-header">Weight</span>
                        <span class="info-desc">70 kg </span>
                    </li>
                    <li>
                        <span class="info-header">Team</span>
                        <span class="info-desc">Satya Wacana Salatiga</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="black white-text">
            <tr class="border-0">
                <th class="yellow border-0">
                    <!-- <a href="#currentSeason" data-toggle="tab">Statistics</a> -->
                    <span style="color: #fff">Statistics</span>
                </th>
                <!--  <th class="yellow border-0">
                                    <a href="#all" data-toggle="tab">Game Logs</a>
                                  </th> -->
            </tr>
        </thead>
    </table>
    <div class="tab-content">
        <div class="tab-pane active" id="currentSeason">
            <!-- <p class="coming-soon">Coming Soon</p> -->
            <div class="p-list">Averages</div>
            <div class="scroll-x-cont">
                <table class="table">
                    <thead class="black white-text">
                        <tr class="footable-header" style="font-size: 8px">
                            <th>Competition</th>
                            <th>Team</th>
                            <th>APG</th>
                            <th>BLKPG</th>
                            <th>FGAPG</th>
                            <th>FGMPG</th>
                            <th>FOUL</th>
                            <th>FTAPG</th>
                            <th>FTMPG</th>
                            <th>MPG</th>
                            <th>RPG</th>
                            <th>STPG</th>
                            <th>PPG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: left;">IBL Pertamax 2020</td>
                            <td>Satya Wacana Salatiga</td>
                            <td>0.13</td>
                            <td>0</td>
                            <td>0.333333</td>
                            <td>0.25</td>
                            <td>0.38</td>
                            <td>0.25</td>
                            <td>0.13</td>
                            <td>3.81</td>
                            <td>0.13</td>
                            <td>0.13</td>
                            <td>0.63</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-static"><i>*Last update 2020-10-14 16:09:01 WIB</i></div>
        </div>
        <!-- <div class="tab-pane" id="all">
                                <p class="coming-soon">Coming Soon</p>
                              </div> -->
    </div>
    <a href="{{ route('players') }}" class="btn btn-success"> Kembali </a>
</div>
@endsection