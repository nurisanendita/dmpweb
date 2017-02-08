<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/style1.css">
        <link rel="stylesheet" href="{{ url('/') }}/dist/css/AdminLTE.min.css">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

        <title>Departemen DMP-Pupuk Kaltim</title>
    </head>
    <body>
        <div class="container">
              <div class="row">
                  <div class="col-md-12 col-lg-12" style="background-color:white;">
                    <img class="logo" src="logo_pkt.png" alt="logo" >
                  </div>
              </div>
        </div>
        <nav class="navbar navbar-inverse" style="height:20px;">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="{{ url('/') }}">BERANDA</a></li>
                  <li><a href="{{ url('/') }}/berita">BERITA</a></li>
                  <li><a href="{{ url('/') }}/dokumentasi">DOKUMENTASI</a></li>
                  <li><a href="{{ url('/') }}/kontak">KONTAK</a></li>
                  <li><a href="{{ url('/') }}/tentang_kami">TENTANG KAMI</a></li>
                </ul>
              </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
