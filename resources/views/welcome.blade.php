@extends('template')

@section('content')
  <div class="container">
    <h1 class="title" style="font-family:Hind">Agenda</h1>
    <div class="row" style="margin-top:20px;">
    	<div class="col-md-10 col-lg-10">

        <div class="row container">

          <!-- carousel slide 1 -->
          <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide1">
            <!-- Individual row agenda slide 1-->
        			<div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda1->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:30px; ">{{date('j',strtotime($agenda1->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda1->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda1->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda1->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h3 style="text-transform:uppercase; color:#0060AF">{{$agenda1->nama_acara}}</h3></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">{{$agenda1->keterangan_acara}}</p>
                </div>
              </div>


    					<!-- Individual News slide 1-->

              <!-- Individual News slide 1-->
              <!-- <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">Jan 2017</span>
                    <span class="info-box-number" style="font-size:30px; ">23</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">B1</span>
                    <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                    <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                  <p>Deskripsi acara, persyaratan peserta</p>
                </div>
              </div> -->
          			<!-- Individual News slide 1-->

                <!-- Individual News slide 1-->
                <!-- <div class="row row1" style="margin-top:10px;">
          				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-blue" style="font-family:Hind;">
                    <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:18px; ">Jan 2017</span>
                      <span class="info-box-number" style="font-size:30px; ">23</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-orange" style="font-family:Hind;">
                    <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:16px;">B1</span>
                      <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                      <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                    <p>Deskripsi acara, persyaratan peserta</p>
                  </div>
                </div> -->
            		<!-- Individual News slide 1-->

                <!-- Individual News slide 1-->
                <!-- <div class="row row1" style="margin-top:10px;">
                  <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-blue" style="font-family:Hind;">
                    <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:18px; ">Jan 2017</span>
                      <span class="info-box-number" style="font-size:30px; ">23</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-orange" style="font-family:Hind;">
                    <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:16px;">B1</span>
                      <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                      <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                    <p>Deskripsi acara, persyaratan peserta</p>
                  </div>
                </div> -->
        					<!-- Individual News slide 1-->
          </div>
        <!-- carousel slide 1 -->

        <!-- carousel slide 2 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide2">
          <!-- Individual News slide 2-->
          <div class="row row1" style="margin-top:10px;">
            <div class="col-md-2 col-lg-2">
              <div class="info-box bg-blue" style="font-family:Hind;">
              <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:18px; ">Feb 2017</span>
                <span class="info-box-number" style="font-size:30px; ">2</span>
              </div>
              </div>
            </div>

            <div class="col-md-2 col-lg-2">
              <div class="info-box bg-orange" style="font-family:Hind;">
              <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:16px;">B1</span>
                <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
              </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
              <p>Deskripsi acara, persyaratan peserta</p>
            </div>
          </div>
  					<!-- Individual News slide 2-->

            <!-- Individual News slide 2-->
            <div class="row row1" style="margin-top:10px;">
              <div class="col-md-2 col-lg-2">
                <div class="info-box bg-blue" style="font-family:Hind;">
                <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:18px; ">Feb 2017</span>
                  <span class="info-box-number" style="font-size:30px; ">2</span>
                </div>
                </div>
              </div>

              <div class="col-md-2 col-lg-2">
                <div class="info-box bg-orange" style="font-family:Hind;">
                <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:16px;">B1</span>
                  <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                  <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                <p>Deskripsi acara, persyaratan peserta</p>
              </div>
            </div>
        			<!-- Individual News slide 2-->

              <!-- Individual News slide 2-->
              <div class="row row1" style="margin-top:10px;">
                <div class="col-md-2 col-lg-2">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">Feb 2017</span>
                    <span class="info-box-number" style="font-size:30px; ">2</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">B1</span>
                    <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                    <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                  <p>Deskripsi acara, persyaratan peserta</p>
                </div>
              </div>
          		<!-- Individual News slide 2-->

              <!-- Individual News slide 2-->
              <div class="row row1" style="margin-top:10px;">
                <div class="col-md-2 col-lg-2">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">Feb 2017</span>
                    <span class="info-box-number" style="font-size:30px; ">2</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">B1</span>
                    <span class="info-box-tex" style="font-size:16px; text-transform:uppercase;">R.kebersaman</span>
                    <span class="info-box-text" style="font-size:16px;">Lantai 3</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <h4 style="text-transform:uppercase;"><a href="#">pelatihan dan sertifikasi karyawan pt pupuk kaltim periode ii</a></h4>
                  <p>Deskripsi acara, persyaratan peserta</p>
                </div>
              </div>
          			<!-- Individual News slide 2-->
        </div>
        <!-- carousel slide 2 -->

        <!-- carousel slide 3 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide3">
          <!-- Individual News slide3-->
          <div class="row row1">
            <div class="col-md-2 col-lg-2 visible-md visible-lg hidden-sm hidden-xs">
              <div class="small-box" style="font-family:Hind; margin-top:15px;">
               <span style="height:45px; line-height:35px; display:block; font-size:22px; text-align: center; padding-top:10px;">R. Ammonia</span>
               <span style="display: block;float: left; height: 45px; width: 130px;  font-size: 25px; padding: 5px 10px; text-align: center;">Lantai 3</span>
               <div class="info-box-content" style=" font-size: 25px; text-align: center;">C1</div>
             </div>
            </div>
            <div class="col-md-2 col-lg-2 agenda-date">
              <div class="small-box2" style="font-family:Hind; margin-top:15px;">
                <span style="height:45px; line-height:35px; display:block; font-size:25px; text-align: center; padding-top:10px;">28 Jan 2017</span>
              </div>
              <span class="label label-default">Jumlah Peserta: </span>
            </div>
            <div class="col-md-6 col-lg-6">
              <h4><a href="#">Nama acara, pelatihan, workshp, sosialisasi</a></h4>
              <p>Deskripsi acara, persyaratan peserta</p>
            </div>
          </div>
  					<!-- Individual News slide3-->

            <!-- Individual News slide3-->
            <div class="row row1">
              <div class="col-md-2 col-lg-2 visible-md visible-lg hidden-sm hidden-xs">
                <div class="small-box" style="font-family:Hind; margin-top:15px;">
                 <span style="height:45px; line-height:35px; display:block; font-size:22px; text-align: center; padding-top:10px;">R. Ammonia</span>
                 <span style="display: block;float: left; height: 45px; width: 130px;  font-size: 25px; padding: 5px 10px; text-align: center;">Lantai 3</span>
                 <div class="info-box-content" style=" font-size: 25px; text-align: center;">C1</div>
               </div>
              </div>
              <div class="col-md-2 col-lg-2 agenda-date">
                <div class="small-box2" style="font-family:Hind; margin-top:15px;">
                  <span style="height:45px; line-height:35px; display:block; font-size:25px; text-align: center; padding-top:10px;">28 Jan 2017</span>
                </div>
                <span class="label label-default">Jumlah Peserta: </span>
              </div>
              <div class="col-md-6 col-lg-6">
                <h4><a href="#">Nama acara, pelatihan, workshp, sosialisasi</a></h4>
                <p>Deskripsi acara, persyaratan peserta</p>
              </div>
            </div>
        			<!-- Individual News slide3-->

              <!-- Individual News slide3-->
              <div class="row row1">
                <div class="col-md-2 col-lg-2 visible-md visible-lg hidden-sm hidden-xs">
                  <div class="small-box" style="font-family:Hind; margin-top:15px;">
                   <span style="height:45px; line-height:35px; display:block; font-size:22px; text-align: center; padding-top:10px;">R. Ammonia</span>
                   <span style="display: block;float: left; height: 45px; width: 130px;  font-size: 25px; padding: 5px 10px; text-align: center;">Lantai 3</span>
                   <div class="info-box-content" style=" font-size: 25px; text-align: center;">C1</div>
                 </div>
                </div>
                <div class="col-md-2 col-lg-2 agenda-date">
                  <div class="small-box2" style="font-family:Hind; margin-top:15px;">
                    <span style="height:45px; line-height:35px; display:block; font-size:25px; text-align: center; padding-top:10px;">28 Jan 2017</span>
                  </div>
                  <span class="label label-default">Jumlah Peserta: </span>
                </div>
                <div class="col-md-6 col-lg-6">
                  <h4><a href="#">Nama acara, pelatihan, workshp, sosialisasi</a></h4>
                  <p>Deskripsi acara, persyaratan peserta</p>
                </div>
              </div>
          			<!-- Individual News slide3-->
        </div>
        <!-- carousel slide 3 -->
      </div>

        <script>
        //carousel-slides
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
    <div class="col-md-2 col-lg-2">
      <!-- Belum siap -->
    </div>
    <!-- Keselamatan Jam Kerja -->

  </div>
</div>

@endsection
