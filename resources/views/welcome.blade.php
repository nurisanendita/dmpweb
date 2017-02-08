@extends('template')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

  <div class="container">
    <h1 class="title" style="font-family:Hind" style="margin-left:-20px;">Agenda</h1>
    <div class="row">
    	<div class="col-md-9 col-lg-9" style="margin-left:-20px; margin-top:-15px;">

        <div class="row container">

          <!-- carousel slide 1 -->
          <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide1">
            <!-- Individual row agenda 1-->
            @foreach($agenda1 as $agenda1_list)
        			<div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda1_list->tanggal_mulai))}}</span>
                    <span class="info-box-text" style="font-size:15px;text-transform:lowercase;text-align:center;">s.d.</span>
                    <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda1_list->tanggal_selesai))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda1_list->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;text-align:center;">{{$agenda1_list->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda1_list->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda1_list->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda1_list->keterangan_acara}}</p>
                </div>
              </div>
              @endforeach
            </div>

        <!-- carousel slide 2 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide3">
          <!-- Individual row agenda 1-->
          @foreach($agenda2 as $agenda2_list)
            <div class="row row1" style="margin-top:10px;">
              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-blue" style="font-family:Hind;">
                <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda2_list->tanggal_mulai))}}</span>
                  <span class="info-box-text" style="font-size:15px;text-transform:lowercase;text-align:center;">s.d.</span>
                  <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda2_list->tanggal_selesai))}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-orange" style="font-family:Hind;">
                <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:16px;">{{$agenda2_list->kode_ruang}}</span>
                  <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;text-align:center;">{{$agenda2_list->nama_ruang}}</span>
                  <span class="info-box-text" style="font-size:16px;">{{$agenda2_list->lantai}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <a href="#"><h4 style="text-transform:uppercase;">{{$agenda2_list->nama_acara}}</h4></a>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda2_list->keterangan_acara}}</p>
              </div>
            </div>
            @endforeach
          </div>

        <!-- carousel slide 3 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide3">
          <!-- Individual row agenda 1-->
          @foreach($agenda3 as $agenda3_list)
            <div class="row row1" style="margin-top:10px;">
              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-blue" style="font-family:Hind;">
                <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda3_list->tanggal_mulai))}}</span>
                  <span class="info-box-text" style="font-size:15px;text-transform:lowercase;text-align:center;">s.d.</span>
                  <span class="info-box-text" style="font-size:18px; ">{{date('j M Y',strtotime($agenda3_list->tanggal_selesai))}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-orange" style="font-family:Hind;">
                <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:16px;">{{$agenda3_list->kode_ruang}}</span>
                  <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda3_list->nama_ruang}}</span>
                  <span class="info-box-text" style="font-size:16px;">{{$agenda3_list->lantai}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <a href="#"><h4 style="text-transform:uppercase;">{{$agenda3_list->nama_acara}}</h4></a>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda3_list->keterangan_acara}}</p>
              </div>
            </div>
            @endforeach
        </div>
        <!-- carousel slide 3 -->
      </div>

        <!-- //carousel-slides agenda -->
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 15000);
        }
        </script>

        <!-- carousel button indicator -->
        <div class="row" style="margin-top:60px;">
          <div class="w3-center w3-section w3-large w3-text-grey w3-display-bottommiddle" style="width:100%;">
            <div class="w3-left w3-padding-left w3-hover-text-orange" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-padding-right w3-hover-text-orange" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-grey w3-hover-orange" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-grey w3-hover-orange" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-grey w3-hover-orange" onclick="currentDiv(3)"></span>
          </div>
        </div>
        <!-- carousel button indicator -->

        <script>
        //slideshow indicator-carousel
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function currentDiv(n) {
          showDivs(slideIndex = n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " w3-white";
        }
        </script>
    </div>

    <!-- Keselamatan Jam Kerja -->
    <div class="col-md-3 col-lg-3">
      <div class="container mySlides2 col-md-12 col-lg-12" style="margin-left:30px;">
          <div class="row container info-box" style="height:200px;">
            <img src="logodmp.png" style="height:200px;width:270px;">
          </div>
      </div>
      <div class="container mySlides2 col-md-12 col-lg-12" style="margin-left:30px;">
          <div class="row container info-box" style="height:200px;">
            <img src="img_kaltim2.jpg" style="height:200px;width:270px;">
          </div>
      </div>
      <div class="row row2 container col-md-12 col-lg-12">
        <span><img style="margin-left:30px; margin-bottom:10px" src="rekorcapaian.png"></span>
        <div>
          <p style="text-align:right;color:#6A6161;"><b>JAM</b></p>
          <p style="text-align:right;color:#6A6161;"><b>HARI</b></p>
        </div>
      </div>
      <div class="row container col-md-12 col-lg-12" style="margin-top:20px;">
        <span><img style="margin-left:30px; margin-bottom:10px" src="rekorskrg.png"></span>
        <div>
          <p style="text-align:right;color:#6A6161;"><b>JAM</b></p>
          <p style="text-align:right;color:#6A6161;"><b>HARI</b></p>
        </div>
      </div>

      <!-- carousel keselamatan jam kerja -->
      <script>
      var myIndex2 = 0;
      slideshow();

      function slideshow() {
          var a;
          var b = document.getElementsByClassName("mySlides2");
          for (a = 0; a < b.length; a++) {
             b[a].style.display = "none";
          }
          myIndex2++;
          if (myIndex2 > b.length) {myIndex2 = 1}
          b[myIndex2-1].style.display = "block";
          setTimeout(slideshow, 5000);
      }
      </script>
    </div>
    <!-- Keselamatan Jam Kerja -->

  </div>
</div>

@endsection
