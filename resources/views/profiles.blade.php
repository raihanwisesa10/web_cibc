@extends('layouts.app')

@section('content')

<!-- <div style="height: 551px;"> -->
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-4 mb-2" >
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{url('img/1-min.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="width: 900px;">

        <!-- Modal content-->
        <div class="modal-content">
          <!-- <div class="col-12"> -->
              <div class="row">
                  <div class="col-4 float-left">
                      <img src="{{url('img/1-min.jpg')}}" style="width: 450px; height: 450px;">
                  </div>
                  <div class="col-8 bg-danger">
                        AAAAAAAAAA
                  </div>

              </div>
            <!-- </div> -->
        </div>

      </div>
    </div>

@endsection