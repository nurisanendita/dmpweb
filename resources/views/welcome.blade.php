@extends('template')

@section('content')
  <div class="container">
    <h1 class="title" style="font-family:Hind">Agenda</h1>
    <div class="row" style="margin-top:20px;">
    	<div class="col-md-10 col-lg-10">

        <div class="row container">

          <!-- carousel slide 1 -->
          <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide1">
            <!-- Individual row agenda 1-->
        			<div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda1->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda1->tanggal_acara))}}</span>
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
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda1->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda1->keterangan_acara}}</p>
                </div>
              </div>

              <!-- Individual row agenda 2-->
              <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda2->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda2->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda2->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda2->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda2->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda2->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda2->keterangan_acara}}</p>
                </div>
              </div>

                <!-- Individual row agenda 3-->
                <div class="row row1" style="margin-top:10px;">
          				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-blue" style="font-family:Hind;">
                    <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda3->tanggal_acara))}}</span>
                      <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda3->tanggal_acara))}}</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-orange" style="font-family:Hind;">
                    <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:16px;">{{$agenda3->kode_ruang}}</span>
                      <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda3->nama_ruang}}</span>
                      <span class="info-box-text" style="font-size:16px;">{{$agenda3->lantai}}</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <a href="#"><h4 style="text-transform:uppercase;">{{$agenda3->nama_acara}}</h4></a>
                    <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda3->keterangan_acara}}</p>
                  </div>
                </div>

                <!-- Individual row agenda 4-->
                <div class="row row1" style="margin-top:10px;">
          				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-blue" style="font-family:Hind;">
                    <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda4->tanggal_acara))}}</span>
                      <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda4->tanggal_acara))}}</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                    <div class="info-box bg-orange" style="font-family:Hind;">
                    <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                    <div class="info-box-content" style="margin-left:30px;">
                      <span class="info-box-text" style="font-size:16px;">{{$agenda4->kode_ruang}}</span>
                      <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda4->nama_ruang}}</span>
                      <span class="info-box-text" style="font-size:16px;">{{$agenda4->lantai}}</span>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <a href="#"><h4 style="text-transform:uppercase;">{{$agenda4->nama_acara}}</h4></a>
                    <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda4->keterangan_acara}}</p>
                  </div>
                </div>
          </div>
        <!-- carousel slide 1 -->

        <!-- carousel slide 2 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide2">
          <!-- Individual row agenda 1-->
          <div class="row row1" style="margin-top:10px;">
            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
              <div class="info-box bg-blue" style="font-family:Hind;">
              <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda5->tanggal_acara))}}</span>
                <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda5->tanggal_acara))}}</span>
              </div>
              </div>
            </div>

            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
              <div class="info-box bg-orange" style="font-family:Hind;">
              <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:16px;">{{$agenda5->kode_ruang}}</span>
                <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda5->nama_ruang}}</span>
                <span class="info-box-text" style="font-size:16px;">{{$agenda5->lantai}}</span>
              </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <a href="#"><h4 style="text-transform:uppercase;">{{$agenda5->nama_acara}}</h4></a>
              <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda5->keterangan_acara}}</p>
            </div>
          </div>

            <!-- Individual row agenda 2-->
            <div class="row row1" style="margin-top:10px;">
              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-blue" style="font-family:Hind;">
                <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda6->tanggal_acara))}}</span>
                  <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda6->tanggal_acara))}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-orange" style="font-family:Hind;">
                <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:16px;">{{$agenda6->kode_ruang}}</span>
                  <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda6->nama_ruang}}</span>
                  <span class="info-box-text" style="font-size:16px;">{{$agenda6->lantai}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <a href="#"><h4 style="text-transform:uppercase;">{{$agenda6->nama_acara}}</h4></a>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda6->keterangan_acara}}</p>
              </div>
            </div>

              <!-- Individual row agenda 3-->
              <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda7->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda7->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda7->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda7->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda7->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda7->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda7->keterangan_acara}}</p>
                </div>
              </div>

              <!-- Individual News slide 2-->
              <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda8->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda8->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda8->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda8->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda8->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda8->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda8->keterangan_acara}}</p>
                </div>
              </div>
        </div>
        <!-- carousel slide 2 -->

        <!-- carousel slide 3 -->
        <div class="container mySlides col-md-12 col-lg-12 w3-animate-right" id="slide3">
          <!-- Individual row agenda 1-->
          <div class="row row1" style="margin-top:10px;">
            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
              <div class="info-box bg-blue" style="font-family:Hind;">
              <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda9->tanggal_acara))}}</span>
                <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda9->tanggal_acara))}}</span>
              </div>
              </div>
            </div>

            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
              <div class="info-box bg-orange" style="font-family:Hind;">
              <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
              <div class="info-box-content" style="margin-left:30px;">
                <span class="info-box-text" style="font-size:16px;">{{$agenda9->kode_ruang}}</span>
                <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda9->nama_ruang}}</span>
                <span class="info-box-text" style="font-size:16px;">{{$agenda9->lantai}}</span>
              </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <a href="#"><h4 style="text-transform:uppercase;">{{$agenda9->nama_acara}}</h4></a>
              <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda9->keterangan_acara}}</p>
            </div>
          </div>

            <!-- Individual row agenda 2-->
            <div class="row row1" style="margin-top:10px;">
              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-blue" style="font-family:Hind;">
                <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda10->tanggal_acara))}}</span>
                  <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda10->tanggal_acara))}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                <div class="info-box bg-orange" style="font-family:Hind;">
                <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                <div class="info-box-content" style="margin-left:30px;">
                  <span class="info-box-text" style="font-size:16px;">{{$agenda10->kode_ruang}}</span>
                  <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda9->nama_ruang}}</span>
                  <span class="info-box-text" style="font-size:16px;">{{$agenda10->lantai}}</span>
                </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <a href="#"><h4 style="text-transform:uppercase;">{{$agenda10->nama_acara}}</h4></a>
                <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda10->keterangan_acara}}</p>
              </div>
            </div>

              <!-- Individual row agenda 3-->
              <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda11->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda11->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda11->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda11->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda11->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda11->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda11->keterangan_acara}}</p>
                </div>
              </div>

              <!-- Individual row agenda 4-->
              <div class="row row1" style="margin-top:10px;">
        				<div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-blue" style="font-family:Hind;">
                  <span class="info-box-icon bg-blue" style="width:60px;"><i style="font-size: 30px; "class="fa fa-calendar"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:18px; ">{{date('M Y',strtotime($agenda12->tanggal_acara))}}</span>
                    <span class="info-box-number" style="font-size:25px; ">{{date('j',strtotime($agenda12->tanggal_acara))}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                  <div class="info-box bg-orange" style="font-family:Hind;">
                  <span class="info-box-icon bg-orange" style="width:40px;"><i style="font-size: 40px; "class="ion ion-ios-location-outline"></i></span>
                  <div class="info-box-content" style="margin-left:30px;">
                    <span class="info-box-text" style="font-size:16px;">{{$agenda12->kode_ruang}}</span>
                    <span class="info-box-tex" style="font-size:16px;text-transform:uppercase;">{{$agenda12->nama_ruang}}</span>
                    <span class="info-box-text" style="font-size:16px;">{{$agenda12->lantai}}</span>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <a href="#"><h4 style="text-transform:uppercase;">{{$agenda12->nama_acara}}</h4></a>
                  <p style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden; font-size: 15px;">{{$agenda11->keterangan_acara}}</p>
                </div>
              </div>
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
