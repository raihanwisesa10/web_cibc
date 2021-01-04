<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Logo title -->
    <link rel="icon" href="{{url('img/Logo_Candramawa-removebg-preview.png')}}" type="image/icon type">

    <!-- Bootstrap core CSS -->
    <link href="{{url('template2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="{{url('template2/css/one-page-wonder.min.css')}}" rel="stylesheet">

    <!-- Footer -->
    <link href="{{url('public/css/footer.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Candramawa Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('players')}}">Players</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="site-footer pt-4 pb-2 text-white" style="background-color: #242424;">
        <h5 class="text-center">More Information</h5>
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 col-md-4">
                    <h6>Location</h6>
                    <i class="fa fa-map-marker"> : <span>Jl. Raya Abdul Gani No.RT 10/04, Kalibaru, Kec. Cilodong, Kota Depok</span></i>
                </div>
                <div class="col-sm-4 col-md-4">
                    <h6>Phone</h6>
                    <i class="fa fa-phone"> : <span>+62-0811-9331-301</span></i>

                </div>
                <div class="col-sm-4 col-md-4">
                    <h6>Social Media</h6>
                    <i class="fa fa-instagram"> <span>: candramawaindonesia </span></i>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="copyright-text text-center">Copyright &copy; 2021 All Rights Reserved by
                    <a href="#">Candramawa</a>.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('template2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('template2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollX": true,
            });
        });
    </script>

</body>

</html>