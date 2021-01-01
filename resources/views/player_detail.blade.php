@extends('layouts.app')

@section('content')
<div class="col-md-12 bg-light" style="margin-bottom: 100px;">

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
    <div class="sportsmagazine-fancy-title" style=" padding-top: 100px;">
        <h2>Alexander Franklyn</h2>
    </div>
    <div class="player-detail">
        <div class="row m-0">
            <div class="col-xs-4 p-0">
                <img src="https://img.wh.sportingpulseinternational.com/9a48509d8cf2840fb1f8288dd23a58ddS1.jpg"
                    class="w-100">
            </div>
            <div class="col-xs-8 mb-10 info-player">
                <!-- <p>Age : 0 Year</p>
                                    <p>Height : 180 cm</p>
                                    <p>Weight : 70 kg</p>
                                    <p>Team : Satya Wacana Salatiga</p> -->
                <ul style="margin-top: 30px;">
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
    <div class="tab-content">
        <div class="tab-pane active" id="currentSeason">
            <div class="p-list">Averages</div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="margin-bottom: 0">
                    <thead class="black white-text">
                        <tr class="footable-header  font-20">
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
            <div class="info-static text-left"><i>*Last update 2020-10-14 16:09:01 WIB</i>
            </div>
        </div>
        <!-- <div class="tab-pane" id="all">
                                <p class="coming-soon">Coming Soon</p>
                              </div> -->
    </div>
    <a href="{{ route('players') }}" class="btn btn-success float-right col-md-3 mt-4"> Kembali </a>
</div>
@endsection
